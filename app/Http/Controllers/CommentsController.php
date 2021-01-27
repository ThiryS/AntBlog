<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Event;
use App\Comment;
use App\User;


class CommentsController extends Controller
{
  /**
  * Get a validator for an incoming registration request.
  *
  * @param  array  $data
  * @param  string  $id
  * @return \Illuminate\Contracts\Validation\Validator
  */
   protected function validator(array $data)
   {
       return Validator::make($data, [
           'comment' => ['required', 'string', 'max:2058'],
       ]);
   }

  /**
   * Show all the Comments.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */

   /**
    * Create a new comment instance after a valid registration.
    *
    * @param  array  $data
    * @return \App\Event
    */
    public function create(Request $request, $id)
    {
      $event = Event::find($id);
      // validators
      $this->validator($request->all())->validate();
      // create event

      $comment = $this->createComment($request->all(), $event);
      // redirect to
      return \Redirect::route('events.show', $event->id)->with('success', 'Commentaire sauvé!');
    }
   protected function createComment(array $data, $event)
   {
       $comment = new Comment([
           'comment' => $data['comment'],
       ]);
       $user=Auth::user();

       $comment->user()->associate($user);
       $comment->event()->associate($event);
       $comment->save();

       return $comment;
    }
    
    public function commentEdit($event_id, $id)
    {
        $event= Event::find($event_id);
        $comment = Comment::find($id);

        if ($comment -> user_id === auth()-> user()-> id) 
        {
            return view('comments/commentEdit', ['event' => $event, 'comment' => $comment]);
        }
        else {
            return \Redirect::route('events.show', $event_id)->with('warning', 'Ce n\'est pas votre commentaire!');
        }
    }

    public function commentUpdate(REQUEST $request, $event_id, $id)
    {
        $data = $this->validator($request->all())->validate();
        $comment = Comment::find($id);
        if ($comment -> user_id === auth()-> user()-> id) 
        {
            $comment -> comment = $request -> get('comment');
            $comment->update(['comment' => $data['comment']]);
            
            return \Redirect::route('events.show', $event_id)->with('success', 'Commentaire modifié!');
        }
        else {
            return \Redirect::route('events.show', $event_id)->with('warning', 'Ce n\'est pas votre commentaire!');
        }
    }

    public function deleteComment($event_id, $id)
    {
        $comment = Comment::find($id); 
        if ($comment -> user_id === auth()-> user()-> id){
            $comment->delete();
            
            return \Redirect::route('events.show', $event_id)->with('success', 'commentaire supprimé!');
        }
        else {
            return \Redirect::route('events.show', $event_id)->with('warning', 'Ce n\'est pas votre commentaire!');
        }
    }
}
