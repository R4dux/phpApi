<?php

class MyRedis {
    public $instance;


    public function redisInstance() {
        if(is_null( $this->instance)) {
            $this->instance = new Redis();
            $this->instance->connect('127.0.0.1', 6379);
        }
        return $this->instance;
    }
}


