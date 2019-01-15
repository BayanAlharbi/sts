<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Auth;
use App\Group;

class GlobalScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
      $userGroups = Auth::user()->group;
        foreach ($userGroups as $userGroup) {
          $userGroupIDs[] =  $userGroup->id;
        };
      if (Auth::user()->hasRole('admin')) {
        $builder;
      }
      elseif (Auth::user()->hasPermissionTo('view group tickets')) {
     $builder->whereIn('group_id', $userGroupIDs);
   } else {
     $userId = Auth::user()->id;
    $builder->whereHas('user', function ($q) use ($userId) {
    $q->where('user_id', $userId);})->whereIn('group_id', $userGroupIDs);
   }
  }
}