<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SalesOverview extends Model
{

    protected $fillable = ['total_sold', 'total_revenue', 'n_count', 's_count', 'g_count', 'p_count', 'n_rev', 's_rev', 'g_rev', 'p_rev'];
    // public $total_sold;
    // public $total_revenue;
    // public $n_count;
    // public $s_count;
    // public $g_count;
    // public $p_count;
    // public $n_rev;
    // public $s_rev;
    // public $g_rev;
    // public $p_rev;

    // function __construct(){
    //     $this->total_sold = 0;
    //     $this->total_revenue = 0;
    //     $this->n_count = 0;
    //     $this->s_count = 0;
    //     $this->g_count = 0;
    //     $this->p_count = 0;
    //     $this->n_rev = 0;
    //     $this->s_rev = 0;
    //     $this->g_rev = 0;
    //     $this->p_rev = 0;
    // }
}
