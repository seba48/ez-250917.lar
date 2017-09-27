<?php

/**
 * Description of TaskRepository
 *
 * @author web
 */
class TaskRepository {

    public function forUser(User $user) {
        return $user->tasks()
                        ->orderBy('created_at', 'asc')
                        ->get();
    }

}
