<?php
/**
 * Copyright (c) 2017 Bitcoin Viet Nam Co., Ltd.
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 *  and associated documentation files (the "Software"), to deal in the Software without restriction,
 *  including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 *  and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 *  do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all copies or substantial
 *  portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 *  INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 *  PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 *  ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 *  THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\BitcoinVietnam;

use BitcoinVietnam\BitcoinVietnam\Request\Order\PatchOrder\Order as OrderPatchOrder;
use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order as OrderPostOrder;
use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\PayoutInterface;
use BitcoinVietnam\BitcoinVietnam\Request\Withdrawal\PostWithdrawal\Withdrawal as WithdrawalPostWithdrawal;
use BitcoinVietnam\BitcoinVietnam\Request\RequestInterface;
use BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount;
use BitcoinVietnam\BitcoinVietnam\Response\Constants\Constraints\GetConstraints;
use BitcoinVietnam\BitcoinVietnam\Response\Constants\GetBankaccounts;
use BitcoinVietnam\BitcoinVietnam\Response\Order\GetOrder;
use BitcoinVietnam\BitcoinVietnam\Response\Order\GetOrders;
use BitcoinVietnam\BitcoinVietnam\Response\Order\PatchOrder;
use BitcoinVietnam\BitcoinVietnam\Response\Order\PostOrder;
use BitcoinVietnam\BitcoinVietnam\Response\Prices\GetPrices;
use BitcoinVietnam\BitcoinVietnam\Response\Withdrawal\PostWithdrawal;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Client
 *
 * @package BitcoinVietnam
 */
class Client

 

<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8" />

        <title>bitcoinvietnam/bitcoinvietnam-php - Packagist</title>

        <meta name="description" content="A PHP library to interact with the Bitcoin Vietnam API" />

        <meta name="author" content="Jordi Boggiano" />

            <link rel="canonical" href="https://packagist.org/packages/bitcoinvietnam/bitcoinvietnam-php" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="shortcut icon" href="/favicon.ico?v=1626203017" />

        <link rel="stylesheet" href="/libs/bootstrap-3.3.5/css/bootstrap.min.css?v=1626203017" />

        <link rel="stylesheet" href="/libs/bootstrap-3.3.5/css/bootstrap-theme.min.css?v=1626203017" />

        <link rel="stylesheet" href="/css/main.css?v=1626203017" />

        <link rel="stylesheet" href="/css/humane/jackedup.css?v=1626203017" />

        

            <link rel="alternate" type="application/rss+xml" title="New Releases - bitcoinvietnam/bitcoinvietnam-php" href="https://packagist.org/feeds/package.bitcoinvietnam/bitcoinvietnam-php.rss" />

    <link rel="alternate" type="application/rss+xml" title="New Releases - bitcoinvietnam" href="https://packagist.org/feeds/vendor.bitcoinvietnam.rss" />

            <link rel="alternate" type="application/rss+xml" title="Newly Submitted Packages - Packagist" href="https://packagist.org/feeds/packages.rss" />

        <link rel="alternate" type="application/rss+xml" title="New Releases - Packagist" href="https://packagist.org/feeds/releases.rss" />

        

        <link rel="search" type="application/opensearchdescription+xml" href="/search.osd?v=1626203017" title="Packagist" />

        

            <link rel="stylesheet" href="/css/github/markdown.css?v=1626203017">

        </head>

    <body>

    <section class="wrap">

        <header class="navbar-wrapper navbar-fixed-top">

            <nav class="container">

                <div class="navbar" role="navigation">

                    <div class="v2highlight"><a href="https://getcomposer.org/2">🎉🎊 Composer 2 is available! 🚀🥳</a></div>

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                            <span class="sr-only">Toggle navigation</span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                        <h1 class="navbar-brand"><a href="/">Packagist</a> <em class="hidden-sm hidden-xs">The PHP Package Repository</em></h1>

                    </div>

                    <div class="collapse navbar-collapse">

                        <ul class="nav navbar-nav">

                            <li>

                                <a href="/explore/">Browse</a>

                            </li>

                            <li>

                                <a href="/packages/submit">Submit</a>

                            </li>                            <li>

                                <a href="/register/">Create account</a>

                            </li>

                            <li class="nav-user">

                                <section class="nav-user-signin">

                                    <a href="/login/">Sign in</a>

                                    <section class="signin-box">

                                        <form action="/login/" method="POST" id="nav_login">

                                            <div class="input-group">

                                                <input class="form-control" type="text" id="_username" name="_username" placeholder="Username / Email">

                                                <span class="input-group-addon"><span class="icon-user"></span></span>

                                            </div>

                                            <div class="input-group">

                                                <input class="form-control" type="password" id="_password" name="_password" placeholder="Password">

                                                <span class="input-group-addon"><span class="icon-lock"></span></span>

                                            </div>

                                            <div class="checkbox">

                                                <label for="_remember_me">

                                                    <input type="checkbox" id="_remember_me" name="_remember_me" value="on" checked="checked" /> Remember me

                                                </label>

                                            </div>

                                            <div class="signin-box-buttons">

                                                <a href="/login/github" class="pull-right btn btn-primary btn-github"><span class="icon-github"></span>Use Github</a>

                                                <button type="submit" class="btn btn-success" id="_submit_mini" name="_submit">Log in</button>

                                            </div>

                                        </form>

                                        <div class="signin-box-register">

                                            <a href="/register/">No account yet? Create one now!</a>

                                        </div>

                                    </section>

                                </section>

                            </li>                        </ul>

                    </div>

                </div>

            </nav>

        </header>

        <section class="wrapper wrapper-search">

    <div class="container ">

        <form name="search_query" method="get" action="/search/" id="search-form" autocomplete="off">

    <div class="sortable row">

        <div class="col-xs-12 js-search-field-wrapper col-md-9">

            <input type="search" id="search_query_query" name="search_query[query]" required="required" autocomplete="off" placeholder="Search packages..." tabindex="1" class=" form-control" value="" />

        </div>

    </div>

</form>

    </div>

</section>

                

        

        <section class="wrapper">

            <section class="container content" role="main">

                                    <div id="search-container" class="hidden">

                        <div class="row">

                            <div class="search-list col-md-9"></div>

                            <div class="search-facets col-md-3">

                                <div class="search-facets-active-filters"></div>

                                <div class="search-facets-type"></div>

                                <div class="search-facets-tags"></div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-9">

                                <div id="powered-by">

                                    Search by <a href="https://www.algolia.com/"><img src="/img/algolia-logo-light.svg?v=1626203017"></a>

                                </div>

                                <div id="pagination-container">

                                    <div class="pagination"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                

                    <div class="row">

        <div class="col-xs-12 package">

            <div class="package-header">

                <div class="row">

                    <div class="col-md-9">

                        <h2 class="title">

                                                        <a href="/packages/bitcoinvietnam/">bitcoinvietnam<span class="hidden"> </span>/</a><span class="hidden"> </span>bitcoinvietnam-php

                        </h2>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-8">

                    <p class="requireme"><i class="glyphicon glyphicon-save"></i> <input type="text" readonly="readonly" value="composer require bitcoinvietnam/bitcoinvietnam-php" /></p>

                    

                    

                                            <div class="alert alert-danger">

                            This package is <strong>abandoned</strong> and no longer maintained.

                                                            The author suggests using the <a href="/packages/bitcoinvietnam/bitcoinvietnam-php">bitcoinvietnam/bitcoinvietnam-php</a> package instead.

                                                    </div>

                                        

                    

                    <p class="description">A PHP library to interact with the Bitcoin Vietnam API</p>

                                    </div>

                <div class="col-md-offset-1 col-md-3">

                    <div class="row package-aside">

                        <div class="details col-xs-12 col-sm-6 col-md-12">

                            <h5>Maintainers</h5>

                            <p class="maintainers">

                                <a href="/users/sonofliberty/"><img width="48" height="48" title="sonofliberty" src="https://www.gravatar.com/avatar/0eefe18e35e221ab6f8a99a1e98442ed?s=48&amp;d=identicon" srcset="https://www.gravatar.com/avatar/0eefe18e35e221ab6f8a99a1e98442ed?s=96&amp;d=identicon 2x"></a>

                                                                                            </p>

                            <h5>Details</h5>

                                                        <p class="canonical">

                                <a href="https://github.com/bitcoinvietnam/bitcoinvn-php" title="Canonical Repository URL">github.com/bitcoinvietnam/bitcoinvn-php</a>

                            </p>

                                                                                        <p><a rel="nofollow noopener external noindex ugc" href="https://github.com/bitcoinvietnam/bitcoinvn-php/tree/master">Source</a></p>

                                                                                        <p><a rel="nofollow noopener external noindex ugc" href="https://github.com/bitcoinvietnam/bitcoinvn-php/issues">Issues</a></p>

                                                                                                                                                                                                </div>

                        

                        <div class="facts col-xs-12 col-sm-6 col-md-12">

                            <p>

                                <span>

                                    <a href="/packages/bitcoinvietnam/bitcoinvietnam-php/stats" rel="nofollow">Installs</a>:

                                </span>

                                663                            </p>

                                                            <p>

                                    <span>

                                        <a href="/packages/bitcoinvietnam/bitcoinvietnam-php/dependents?order_by=downloads" rel="nofollow">Dependents</a>:

                                    </span>

                                    0

                                </p>

                                                                                        <p>

                                    <span>

                                        <a href="/packages/bitcoinvietnam/bitcoinvietnam-php/suggesters" rel="nofollow">Suggesters</a>:

                                    </span>

                                    0

                                </p>

                                                                                        <p>

                                    <span>

                                        <a href="/packages/bitcoinvietnam/bitcoinvietnam-php/advisories" rel="nofollow">Security</a>:

                                    </span>

                                    0

                                </p>

                                                                                        <p>

                                    <span>

                                        <a href="https://github.com/bitcoinvietnam/bitcoinvn-php/stargazers">Stars</a>:

                                    </span>

                                    0

                                </p>

                                                                                        <p>

                                    <span>

                                        <a href="https://github.com/bitcoinvietnam/bitcoinvn-php/watchers">Watchers</a>:

                                    </span> 2

                                </p>

                                                                                        <p>

                                    <span>

                                        <a href="https://github.com/bitcoinvietnam/bitcoinvn-php/network">Forks</a>:

                                    </span>

                                    1

                                </p>

                                                                                        <p>

                                    <span>

                                        <a rel="nofollow noopener external noindex ugc" href="https://github.com/bitcoinvietnam/bitcoinvn-php/issues">Open Issues</a>:

                                    </span>

                                    0

                                </p>

                                                                                                            </div>

                    </div>

                </div>

            </div>

            

                            <div class="row versions-section">

                    <div class="version-details col-md-9">

                                                    <div class="title">

    <span class="version-number">dev-master</span>

    <span class="release-date">2021-02-23 02:41 UTC</span>

</div>

<div class="clearfix package-links">

            <div class="row">

                            <div class="clearfix visible-sm-block"></div>                <div class="clearfix visible-md-block visible-lg-block"></div>                <div class="requires col-sm-6 col-md-4 ">

                    <p class="link-type">Requires</p>

                                            <ul><li><a href="/packages/doctrine/collections">doctrine/collections</a>: ^1.4</li><li><a href="/packages/guzzlehttp/guzzle">guzzlehttp/guzzle</a>: ^6.2</li><li><a href="/packages/jms/serializer">jms/serializer</a>: ^1.5|^2.0|^3.0</li></ul>

                                    </div>

                                                            <div class="devRequires col-sm-6 col-md-4 ">

                    <p class="link-type">Requires (Dev)</p>

                                            <ul><li><a href="/packages/symfony/var-dumper">symfony/var-dumper</a>: ^3.2</li></ul>

                                    </div>

                            <div class="clearfix visible-sm-block"></div>                                <div class="suggests col-sm-6 col-md-4 hidden-xs">

                    <p class="link-type">Suggests</p>

                                            <p class="no-links">None</p>

                                    </div>

                                            <div class="clearfix visible-md-block visible-lg-block"></div>                <div class="provides col-sm-6 col-md-4 hidden-xs">

                    <p class="link-type">Provides</p>

                                            <p class="no-links">None</p>

                                    </div>

                            <div class="clearfix visible-sm-block"></div>                                <div class="conflicts col-sm-6 col-md-4 hidden-xs">

                    <p class="link-type">Conflicts</p>

                                            <p class="no-links">None</p>

                                    </div>

                                                            <div class="replaces col-sm-6 col-md-4 hidden-xs">

                    <p class="link-type">Replaces</p>

                                            <p class="no-links">None</p>

                                    </div>

                    </div>

    </div>

<div class="metadata">

    <p class="license"><i class="glyphicon glyphicon-copyright-mark" title="License"></i> MIT <span class="source-reference"><i class="glyphicon glyphicon-bookmark" title="Source Reference"></i> e682477f00098a0531a0ce5deb7dc8c06d82f1e2</span></p>

            <i class="glyphicon glyphicon-user" title="Authors"></i>

        <ul class="authors">

                            <li>Alex Winter                        <span class="visible-sm-inline visible-md-inline visible-lg-inline">&lt;alex<span style="display:none">.woop</span>@bitcoin.vn&gt;</span></li>

                    </ul>

    

    </div>

                                            </div>

                    <div class="col-md-3 no-padding">

                        <div class="package-aside versions-wrapper">

    <ul class="versions">

                                <li class="details-toggler version open" data-version-id="dev-master" data-load-more="/versions/4208519.json">

                <a href="#dev-master" class="version-number">dev-master</a>

                

                            </li>

                                <li class="details-toggler version" data-version-id="dev-feature/BV-369" data-load-more="/versions/5099223.json">

                <a href="#dev-feature/BV-369" class="version-number">dev-feature/BV-369</a>

                

                            </li>

                                <li class="details-toggler version last" data-version-id="dev-develop" data-load-more="/versions/1308396.json">

                <a href="#dev-develop" class="version-number">dev-develop</a>

                

                            </li>

            </ul>

    <div class="hidden versions-expander">

        <i class="glyphicon glyphicon-chevron-down"></i>

    </div>

</div>

    <div class="last-update">

                    <p class="auto-update-success">This package is auto-updated.</p>

                <p>Last update: 2021-07-05 04:09:02 UTC </p>

            </div>

                    </div>

                </div>

            

                            <hr class="clearfix">

                <div class="readme markdown-body">

                    <h1>README</h1>

                    

<p><a href="https://api.bitcoinvn.io" rel="nofollow noindex noopener external ugc">https://api.bitcoinvn.io</a></p>

<h1><a id="user-content-composer-installation" class="anchor" href="#user-content-composer-installation" rel="nofollow noindex noopener external ugc"></a>Composer installation</h1>

<p>Add the following to your composer.json:</p>

<pre>{

    <span class="pl-s"><span class="pl-pds">"</span>require<span class="pl-pds">"</span></span>: {

        <span class="pl-s"><span class="pl-pds">"</span>bitcoinvietnam/bitcoinvietnam-php<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>@dev<span class="pl-pds">"</span></span>

    }

}</pre>

<h2><a id="user-content-usage" class="anchor" href="#user-content-usage" rel="nofollow noindex noopener external ugc"></a>Usage</h2>

<p>Instantiate a Client object</p>

<pre><span class="pl-s1"><span class="pl-c1">$</span>apiKey</span> = <span class="pl-s">'MY_API_KEY'</span>;

<span class="pl-s1"><span class="pl-c1">$</span>client</span> = <span class="pl-k">new</span> \<span class="pl-v">BitcoinVietnam</span>\<span class="pl-v">BitcoinVietnam</span>\<span class="pl-v">Client</span>(<span class="pl-s1"><span class="pl-c1">$</span>apiKey</span>);</pre>

                </div>

                    </div>

    </div>

            </section>

        </section>

    </section>

        <footer class="wrapper-footer">

            <nav class="container">

                <div class="row">

                    <ul class="social col-xs-7 col-sm-4 col-md-2 pull-right">

                        <li><a href="http://github.com/composer/packagist" title="GitHub"><span class="icon-github"></span></a></li>

                        <li><a href="https://twitter.com/packagist" title="Follow @packagist"><span class="icon-twitter"></span></a></li>

                        <li><a href="mailto:contact@packagist.org" title="Contact"><span class="icon-mail"></span></a></li>

                    </ul>

                    <ul class="col-xs-4 col-md-2">

                        <li><a href="/about">About Packagist</a></li>

                        <li><a href="/feeds/" rel="nofollow">Atom/RSS Feeds</a></li>

                    </ul>

                    <div class="clearfix visible-xs-block"></div>

                    <ul class="col-xs-3 col-md-2">

                        <li><a href="/statistics" rel="nofollow">Statistics</a></li>

                        <li><a href="/explore/">Browse Packages</a></li>

                    </ul>

                    <div class="clearfix visible-xs-block"></div>

                    <ul class="col-xs-3 col-md-2">

                        <li><a href="/apidoc">API</a></li>

                        <li><a href="/mirrors">Mirrors</a></li>

                    </ul>

                    <div class="clearfix visible-xs-block"></div>

                    <ul class="col-xs-3 col-md-2">

                        <li><a href="https://status.packagist.org/">Status</a></li>

                    </ul>

                </div>

                <div class="row">

                    <p class="toran col-xs-12">Packagist maintenance and hosting is provided by <a href="https://packagist.com/">Private Packagist</a></p>

                </div>

            </nav>

        </footer>

        <script>

            var algoliaConfig = {"app_id":"M58222SH95","search_key":"5ae4d03c98685bd7364c2e0fd819af05","index_name":"packagist"};

        </script>

        <script src="/libs/jquery-2.1.4.min.js?v=1626203017"></script>

        <script src="/libs/humane-3.2.2.min.js?v=1626203017"></script>

        <script src="/js/layout.js?v=1626203017"></script>

        <script src="/libs/bootstrap-3.3.5/js/bootstrap.min.js?v=1626203017"></script>

        <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.7.4/dist/instantsearch.min.js"></script>

        <script src="/js/search.js?v=1626203017"></script>        <script>

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('set', 'anonymizeIp', true);

            ga('create', 'UA-26723099-1', 'auto');

            ga('send', 'pageview');

        </script>

            <script src="/js/view.js?v=1626203017"></script>

    </body>

</html>
   
    
