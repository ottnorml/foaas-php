<?php

namespace Foaas;

use Guzzle\Service\Client as GuzzleClient;

/**
 * Fuck off as a Service.
 *
 * Because fuck you. That's why. (Seriously, this is probably the best remote
 * service ever.)
 *
 * @link http://foaas.com/
 * @link https://github.com/xenph/foaas
 */
class Foaas extends GuzzleClient
{
    /**
     * Fuck. Better make an FOAAS call.
     */
    public function __construct()
    {
        parent::__construct('https://foaas.herokuapp.com/', array(
            'request.options' => array(
                'headers' => array(
                    'Accept' => 'application/json',
                ),
            ),
        ));
    }

    /**
     * Make a fucking FOAAS HTTP request.
     *
     * The $name and $from parameters are in reverse order from their FOAAS call
     * to make the calling code a little easier when no name is present. And
     * because I fucking feel like it.
     *
     * @throws Exception if FOAAS is giving us shit.
     * @param string $action
     * @param string $from
     * @param string $name
     * @return \Foaas\Response
     */
    protected function call($action, $from, $name = null) {
        $action = rawurlencode($action);
        $from = rawurlencode($from);
        $name = rawurlencode($name);
        $path = (is_null($action) ? '' : "/{$action}") . (is_null($name) ? '' : "/{$name}") . "/{$from}";

        try {
            $response = $this->get($path)->send()->json();
            return new Response($response['message'], $response['subtitle']);
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Fuck off.
     *
     * @param string $name
     * @param string $from
     * @return \Foaas\Response
     */
    public function off($name, $from)
    {
        return $this->call('off', $from, $name);
    }

    /**
     * Fuck you.
     *
     * @param string $name
     * @param string $from
     * @return \Foaas\Response
     */
    public function you($name, $from)
    {
        return $this->call('you', $from, $name);
    }

    /**
     * Fuck that.
     *
     * @param string $from
     * @return \Foaas\Response
     */
    public function that($from)
    {
        return $this->call('that', $from);
    }

    /**
     * Fuck this.
     *
     * @param string $from
     * @return \Foaas\Response
     */
    public function this($from)
    {
        return $this->call('this', $from);
    }

    /**
     * Fuck everything.
     *
     * @param string $from
     * @return \Foaas\Response
     */
    public function everything($from)
    {
        return $this->call('everything', $from);
    }

    /**
     * Fuck everyone.
     *
     * @param string $from
     * @return \Foaas\Response
     */
    public function everyone($from)
    {
        return $this->call('everyone', $from);
    }

    /**
     * Go and take a flying fuck at a rolling donut.
     *
     * @param string $name
     * @param string $from
     * @return \Foaas\Response
     */
    public function donut($name, $from)
    {
        return $this->call('donut', $from, $name);
    }

    /**
     * Thou clay-brained guts, thou knotty-pated fool, thou whoreson obscene
     * greasy tallow-catch!
     *
     * @param string $name
     * @param string $from
     * @return \Foaas\Response
     */
    public function shakespeare($name, $from)
    {
        return $this->call('shakespeare', $from, $name);
    }

    /**
     * There aren't enough swear-words in the English language, so now I'll have
     * to call you perkeleen vittupää just to express my disgust and frustration
     * with this crap.
     *
     * @param string $name
     * @param string $from
     * @return \Foaas\Response
     */
    public function linus($name, $from)
    {
        return $this->call('linus', $from, $name);
    }

    /**
     * Oh fuck off, just really fuck off you total dickface. Christ, you are
     * fucking thick.
     *
     * @param string $name
     * @param string $from
     * @return \Foaas\Response
     */
    public function king($name, $from)
    {
        return $this->call('king', $from, $name);
    }

    /**
     * Well, Fuck me pink.
     *
     * @param string $from
     * @return \Foaas\Response
     */
    public function pink($from)
    {
        return $this->call('pink', $from);
    }

    /**
     * Fuck my life.
     *
     * @param string $from
     * @return \Foaas\Response
     */
    public function life($from)
    {
        return $this->call('life', $from);
    }

    /**
     * Fuck me gently with a chainsaw. Do I look like Mother Teresa?
     *
     * @param string $name
     * @param string $from
     * @return \Foaas\Response
     */
    public function chainsaw($name, $from)
    {
        return $this->call('chainsaw', $from, $name);
    }

    /**
     * Fuck you very much.
     *
     * @param string $from
     * @return \Foaas\Response
     */
    public function thanks($from)
    {
        return $this->call('thanks', $from);
    }

    /**
     * Fuck <something>.
     *
     * @param string $something
     * @param string $from
     * @return \Foaas\Response
     */
    public function __something($something, $from)
    {
        return $this->call($something, $from);
    }

    /**
     * I don't give a flying fuck.
     *
     * @param string $from
     * @return \Foaas\Response
     */
    public function flying($from)
    {
        return $this->call('flying', $from);
    }

    /**
     * Fascinating story, in what chapter do you shut the fuck up?.
     *
     * @param string $from
     * @return \Foaas\Response
     */
    public function fascinating($from)
    {
        return $this->call('fascinating', $from);
    }

    /**
     * What you've just said is one of the most insanely idiotic things I have
     * ever heard. At no point in your rambling, incoherent response were you
     * even close to anything that could be considered a rational thought.
     * Everyone in this room is now dumber for having listened to it. I award
     * you no points, and may God have mercy on your soul.
     *
     * @param string $name
     * @param string $from
     * @return \Foaas\Response
     */
    public function madison($name, $from)
    {
        return $this->call('madison', $from, $name);
    }
}
