<?php

class PigLatin {

    // many digraphs, list not exhaustive for English
    protected $digraphs = array( 'ch', 'sh', 'th', 'ph', 'wh', 'qu', 'br', 'cr', 'dr', 'fr', 'gr', 'pr', 'tr', 'wr', 'sw', 'gn', 'kn', 'mn', 'pn', 'rh', 'th', 'ts', 'wh', 'wr' );
    
    //many trigraphs, list not exhaustive for English
    protected $trigraphs = array ( 'sch', 'scr', 'shr', 'sph', 'spl', 'spr', 'squ', 'str', 'thr' );

    //vowels, exclude y
    protected $vowels = array( 'a', 'e', 'i', 'o', 'u' );

    function convert( $word ) {    
        $first_letter = substr( $word, 0, 1 );
        $first_two_letters = substr( $word, 0, 2 );
        $first_three_letters = substr( $word, 0, 3 );

        // First letter handling
        $rest_of_word = substr( $word, 1 );
        $latin_word = $rest_of_word . $first_letter . 'ay';

        // Vowel Start
        if ( in_array( $first_letter, $this->vowels ) ) {
            $latin_word = $word . 'ay';
        } 

        // Digraphs
        if ( in_array( $first_two_letters, $this->digraphs ) ) {
            $rest_of_word = substr( $word, 2 );
            $latin_word = $rest_of_word . $first_two_letters . 'ay';
        } 

        // Trigraphs
        if ( in_array( $first_three_letters, $this->trigraphs ) ) {
            $rest_of_word = substr( $word, 3 );
            $latin_word = $rest_of_word . $first_three_letters . 'ay';
        }

        return $latin_word;
    }
}