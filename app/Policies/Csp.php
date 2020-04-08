<?php

namespace App\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Policy;

class Csp extends Policy
{
    /**
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    public function configure()
    {
        $this->setDefaultPolicies()
            ->addGoogleFontPolicies()
            ->addGravatarPolicies();
    }

    /**
     * @return Policy
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    private function setDefaultPolicies()
    {
        return $this->addDirective(Directive::BASE, 'self')
            ->addDirective(Directive::CONNECT, 'self')
            ->addDirective(Directive::DEFAULT, 'self')
            ->addDirective(Directive::FORM_ACTION, 'self')
            ->addDirective(Directive::IMG, [
		Keyword::SELF,
                'blog.mazedlx.net',
                'images-eu.ssl-images-amazon.com',
            ])
            ->addDirective(Directive::FRAME, [
                Keyword::SELF,
                'www.youtube.com',
            ])
            ->addDirective(Directive::MEDIA, Keyword::SELF)
            ->addDirective(Directive::OBJECT, Keyword::SELF)
	    ->addDirective(Directive::SCRIPT, [
		 Keyword::SELF,
		 Keyword::UNSAFE_EVAL,
		 Keyword::UNSAFE_INLINE,
	    ])
            ->addDirective(Directive::STYLE, [
                Keyword::SELF,
		Keyword::UNSAFE_INLINE,
            ]);
    }

    /**
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    private function addGoogleFontPolicies()
    {
        $this->addDirective(Directive::FONT, [
            'fonts.gstatic.com',
            'fonts.googleapis.com',
            'data:',
        ])
            ->addDirective(Directive::STYLE, 'fonts.googleapis.com');
	return $this;
    }

    /**
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    private function addGravatarPolicies()
    {
        $this->addDirective(Directive::IMG, '*.gravatar.com');
	return $this;
    }
}
