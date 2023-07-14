<?php 

use PHPUnit\Framework\TestCase;

class PigLatinTest extends TestCase {
    /** @test */
    function convert_single_starting_consonant_word_to_pig_latin() {
        $word = 'test';
        $expected_result = 'esttay';

        $pig_latin = new PigLatin();
        $result = $pig_latin->convert($word);

        $this->assertEquals( 
            $expected_result, 
            $result,
            "PigLatin conversion did not work correctly."
        );
    }

    /** @test */
    function convert_digraph_word_to_pig_latin() {
        $word = 'swept';
        $expected_result = 'eptsway';

        $pig_latin = new PigLatin();
        $result = $pig_latin->convert($word);

        $this->assertEquals( 
            $expected_result, 
            $result,
            "PigLatin digraph conversion did not work correctly."
        );
    }

    /** @test */
    function convert_trigraph_word_to_pig_latin() {
        $word = 'thrice';
        $expected_result = 'icethray';

        $pig_latin = new PigLatin();
        $result = $pig_latin->convert($word);

        $this->assertEquals( 
            $expected_result, 
            $result,
            "PigLatin digraph conversion did not work correctly."
        );
    }
    
    /** @test */
    function convert_vowel_start_word_to_pig_latin() {
        $word = 'apple';
        $expected_result = 'appleay';

        $pig_latin = new PigLatin();
        $result = $pig_latin->convert($word);

        $this->assertEquals( 
            $expected_result, 
            $result,
            "PigLatin vowel-start conversion did not work correctly."
        );
    }
}