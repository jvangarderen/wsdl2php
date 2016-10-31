<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * SpellingSuggestionType
 * Suggested spelling of mispelled search terms, along with the number of matching items that
 * would have been returned if the suggestions had been used.
 */
class SpellingSuggestionType
{
    /**
     * @var int | The number of matching items if the suggested spelling of the search term or terms had
     * been used. If multiple terms are used, MatchingItemCount applies to the terms taken
     * as a unit.
     */
    public $matchingitemcount;
    /**
     * @var string | Suggestion for a different spelling of the search term or terms. The suggestions are
     * given in Text tags  and the suggestion for the first word is given before the suggestion
     * for subsequent words.  Suggestions are based on correctly-spelled terms in items, so
     * suggestions vary over time and depend on   whether a word or word combination is in
     * one or more items.
     */
    public $text;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\<anyXML>
     */
    public $any;
    /**
     * @param int $val
     * @throws Exception
     */
    public function setMatchingItemCount($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->matchingitemcount = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setText($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for Text');
        }
        $this->text = (int)$val;
    }

    /**
     * @param <anyXML> $val
     * @throws Exception
     */
    public function setAny($val)
    {
        $this->any = (int)$val;
    }
}