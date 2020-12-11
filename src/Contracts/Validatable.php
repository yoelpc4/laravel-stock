<?php

namespace Yoelpc4\LaravelStock\Contracts;

interface Validatable
{
    /**
     * Get must validated's data
     *
     * @return array
     */
    public function data();

    /**
     * Get must validated's rules
     *
     * @return array
     */
    public function rules();

    /**
     * Get must validated's messages
     *
     * @return array
     */
    public function messages();

    /**
     * Get must validated's custom attributes
     *
     * @return array
     */
    public function customAttributes();
}
