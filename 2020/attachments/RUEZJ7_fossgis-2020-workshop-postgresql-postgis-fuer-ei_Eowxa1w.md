





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="dns-prefetch" href="https://github.githubassets.com">
  <link rel="dns-prefetch" href="https://avatars0.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars1.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars2.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars3.githubusercontent.com">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" media="all" integrity="sha512-5Bs4ERl99/u2AUfpOZF2F0cdfNby7+Vd9teUshXUBPo5CjwECR7IAEf+weI/eCk5tF7K1h3O8hd8k0+P/HePeg==" rel="stylesheet" href="https://github.githubassets.com/assets/frameworks-e41b3811197df7fbb60147e939917617.css" />
  <link crossorigin="anonymous" media="all" integrity="sha512-21eX2YaEYIYa91WFh0mXaxJ3wLQxy2ldlpRbyuCueK3MvqHGEzmXYPkMQ4XBtASauZXKlL1hPxQQU9g28R03wQ==" rel="stylesheet" href="https://github.githubassets.com/assets/site-db5797d9868460861af755858749976b.css" />
    <link crossorigin="anonymous" media="all" integrity="sha512-vna9AxrJa9t+A93H0lxAPca1mXWQB5A/jIBppkp+Ys/EV2l+rsMcCyU/Fj4BpmEZ3nY4hHwJ/FqUEeMFXiYl0w==" rel="stylesheet" href="https://github.githubassets.com/assets/github-be76bd031ac96bdb7e03ddc7d25c403d.css" />
    
    
    
    


  <meta name="viewport" content="width=device-width">
  
  <title>fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md at master · astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde · GitHub</title>
    <meta name="description" content="FOSSGIS 2020 Workshop PostgreSQL/PostGIS für Einsteiger (Freiburg) - astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde">
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">

    <meta name="twitter:image:src" content="https://avatars0.githubusercontent.com/u/996298?s=400&amp;v=4" /><meta name="twitter:site" content="@github" /><meta name="twitter:card" content="summary" /><meta name="twitter:title" content="astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde" /><meta name="twitter:description" content="FOSSGIS 2020 Workshop PostgreSQL/PostGIS für Einsteiger (Freiburg) - astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde" />
    <meta property="og:image" content="https://avatars0.githubusercontent.com/u/996298?s=400&amp;v=4" /><meta property="og:site_name" content="GitHub" /><meta property="og:type" content="object" /><meta property="og:title" content="astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde" /><meta property="og:url" content="https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde" /><meta property="og:description" content="FOSSGIS 2020 Workshop PostgreSQL/PostGIS für Einsteiger (Freiburg) - astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde" />

  <link rel="assets" href="https://github.githubassets.com/">
  
  

  <meta name="request-id" content="A9FE:30E27:2B49EC1:3E01C96:5E74F0EE" data-pjax-transient="true"/><meta name="html-safe-nonce" content="919eacd2c294d23173caaa3533b49bbb372b913e" data-pjax-transient="true"/><meta name="visitor-payload" content="eyJyZWZlcnJlciI6Imh0dHBzOi8vZ2l0aHViLmNvbS9hc3Ryb2lkZXgvcHJlc2VudGF0aW9ucy90cmVlL21hc3Rlci9GT1NTR0lTMjAyMCIsInJlcXVlc3RfaWQiOiJBOUZFOjMwRTI3OjJCNDlFQzE6M0UwMUM5Njo1RTc0RjBFRSIsInZpc2l0b3JfaWQiOiIxMDYzMDAyODAxMDE5MDU0MjU5IiwicmVnaW9uX2VkZ2UiOiJhbXMiLCJyZWdpb25fcmVuZGVyIjoiYW1zIn0=" data-pjax-transient="true"/><meta name="visitor-hmac" content="14b36070e70db972238334af48f2dff71964b5a9838b4c74fd840dcecd78512b" data-pjax-transient="true"/>



  <meta name="github-keyboard-shortcuts" content="repository,source-code" data-pjax-transient="true" />

  

  <meta name="selected-link" value="repo_source" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
  <meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
  <meta name="google-site-verification" content="GXs5KoUUkNCoaAZn7wPN-t01Pywp9M3sEjnt_3_ZWPc">

<meta name="octolytics-host" content="collector.githubapp.com" /><meta name="octolytics-app-id" content="github" /><meta name="octolytics-event-url" content="https://collector.githubapp.com/github-external/browser_event" /><meta name="octolytics-dimension-ga_id" content="" class="js-octo-ga-id" />
<meta name="analytics-location" content="/&lt;user-name&gt;/&lt;repo-name&gt;/blob/show" data-pjax-transient="true" />



    <meta name="google-analytics" content="UA-3769691-2">


<meta class="js-ga-set" name="dimension1" content="Logged Out">



  

      <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

      <meta name="expected-hostname" content="github.com">


    <meta name="enabled-features" content="MARKETPLACE_FEATURED_BLOG_POSTS,MARKETPLACE_INVOICED_BILLING,MARKETPLACE_SOCIAL_PROOF_CUSTOMERS,MARKETPLACE_TRENDING_SOCIAL_PROOF,MARKETPLACE_RECOMMENDATIONS,MARKETPLACE_PENDING_INSTALLATIONS,RELATED_ISSUES">

  <meta http-equiv="x-pjax-version" content="a27fe1a3c5fc3b63b7a7128d74222608">
  

      <link href="https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/commits/master.atom" rel="alternate" title="Recent Commits to fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde:master" type="application/atom+xml">

  <meta name="go-import" content="github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde git https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.git">

  <meta name="octolytics-dimension-user_id" content="996298" /><meta name="octolytics-dimension-user_login" content="astroidex" /><meta name="octolytics-dimension-repository_id" content="241895102" /><meta name="octolytics-dimension-repository_nwo" content="astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde" /><meta name="octolytics-dimension-repository_public" content="true" /><meta name="octolytics-dimension-repository_is_fork" content="false" /><meta name="octolytics-dimension-repository_network_root_id" content="241895102" /><meta name="octolytics-dimension-repository_network_root_nwo" content="astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde" /><meta name="octolytics-dimension-repository_explore_github_marketplace_ci_cta_shown" content="false" />


    <link rel="canonical" href="https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md" data-pjax-transient>


  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <link rel="mask-icon" href="https://github.githubassets.com/pinned-octocat.svg" color="#000000">
  <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://github.githubassets.com/favicon.ico">

<meta name="theme-color" content="#1e2327">


  <link rel="manifest" href="/manifest.json" crossOrigin="use-credentials">

  </head>

  <body class="logged-out env-production page-responsive page-blob">
    

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" class="px-2 py-4 bg-blue text-white show-on-focus js-skip-to-content">Skip to content</a>
    <span class="Progress progress-pjax-loader position-fixed width-full js-pjax-loader-bar">
      <span class="progress-pjax-loader-bar top-0 left-0" style="width: 0%;"></span>
    </span>

    
    



        <header class="Header-old header-logged-out js-details-container Details position-relative f4 py-2" role="banner">
  <div class="container-lg d-lg-flex flex-items-center p-responsive">
    <div class="d-flex flex-justify-between flex-items-center">
        <a class="mr-4" href="https://github.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
          <svg height="32" class="octicon octicon-mark-github text-white" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
        </a>

          <div class="d-lg-none css-truncate css-truncate-target width-fit p-2">
            
              <svg class="octicon octicon-repo" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
    <a class="Header-link" href="/astroidex">astroidex</a>
    /
    <a class="Header-link" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde">fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde</a>


          </div>

        <div class="d-flex flex-items-center">
            <a href="/join?source=header-repo"
              class="d-inline-block d-lg-none f5 text-white no-underline border border-gray-dark rounded-2 px-2 py-1 mr-3 mr-sm-5"
              data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;site header&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;originating_url&quot;:&quot;https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="095b8981ff773f7dab71d98b9153dddac63250e2ccc9f8b4aeadbba6b9b9d5d0"
              data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">
              Sign&nbsp;up
            </a>

          <button class="btn-link d-lg-none mt-1 js-details-target" type="button" aria-label="Toggle navigation" aria-expanded="false">
            <svg height="24" class="octicon octicon-three-bars text-white" viewBox="0 0 12 16" version="1.1" width="18" aria-hidden="true"><path fill-rule="evenodd" d="M11.41 9H.59C0 9 0 8.59 0 8c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zm0-4H.59C0 5 0 4.59 0 4c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zM.59 11H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1H.59C0 13 0 12.59 0 12c0-.59 0-1 .59-1z"/></svg>
          </button>
        </div>
    </div>

    <div class="HeaderMenu HeaderMenu--logged-out position-fixed top-0 right-0 bottom-0 height-fit position-lg-relative d-lg-flex flex-justify-between flex-items-center flex-auto">
      <div class="d-flex d-lg-none flex-justify-end border-bottom bg-gray-light p-3">
        <button class="btn-link js-details-target" type="button" aria-label="Toggle navigation" aria-expanded="false">
          <svg height="24" class="octicon octicon-x text-gray" viewBox="0 0 12 16" version="1.1" width="18" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
        </button>
      </div>

        <nav class="mt-0 px-3 px-lg-0 mb-5 mb-lg-0" aria-label="Global">
          <ul class="d-lg-flex list-style-none">
              <li class="d-block d-lg-flex flex-lg-nowrap flex-lg-items-center border-bottom border-lg-bottom-0 mr-0 mr-lg-3 edge-item-fix position-relative flex-wrap flex-justify-between d-flex flex-items-center ">
                <details class="HeaderMenu-details details-overlay details-reset width-full">
                  <summary class="HeaderMenu-summary HeaderMenu-link px-0 py-3 border-0 no-wrap d-block d-lg-inline-block">
                    Why GitHub?
                    <svg x="0px" y="0px" viewBox="0 0 14 8" xml:space="preserve" fill="none" class="icon-chevon-down-mktg position-absolute position-lg-relative">
                      <path d="M1,1l6.2,6L13,1"></path>
                    </svg>
                  </summary>
                  <div class="dropdown-menu flex-auto rounded-1 bg-white px-0 mt-0 pb-4 p-lg-4 position-relative position-lg-absolute left-0 left-lg-n4">
                    <a href="/features" class="py-2 lh-condensed-ultra d-block link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Features">Features <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a>
                    <ul class="list-style-none f5 pb-3">
                      <li class="edge-item-fix"><a href="/features/code-review/" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Code review">Code review</a></li>
                      <li class="edge-item-fix"><a href="/features/project-management/" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Project management">Project management</a></li>
                      <li class="edge-item-fix"><a href="/features/integrations" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Integrations">Integrations</a></li>
                      <li class="edge-item-fix"><a href="/features/actions" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Actions">Actions</a></li>
                          <li class="edge-item-fix"><a href="/features/packages" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to GitHub Packages">Packages</a></li>
                      <li class="edge-item-fix"><a href="/features/security" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Security">Security</a></li>
                      <li class="edge-item-fix"><a href="/features#team-management" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Team management">Team management</a></li>
                      <li class="edge-item-fix"><a href="/features#hosting" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Code hosting">Hosting</a></li>
                    </ul>

                    <ul class="list-style-none mb-0 border-lg-top pt-lg-3">
                      <li class="edge-item-fix"><a href="/customer-stories" class="py-2 lh-condensed-ultra d-block no-underline link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Customer stories">Customer stories <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                      <li class="edge-item-fix"><a href="/security" class="py-2 lh-condensed-ultra d-block no-underline link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Security">Security <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                    </ul>
                  </div>
                </details>
              </li>
              <li class="border-bottom border-lg-bottom-0 mr-0 mr-lg-3">
                <a href="/enterprise" class="HeaderMenu-link no-underline py-3 d-block d-lg-inline-block" data-ga-click="(Logged out) Header, go to Enterprise">Enterprise</a>
              </li>

              <li class="d-block d-lg-flex flex-lg-nowrap flex-lg-items-center border-bottom border-lg-bottom-0 mr-0 mr-lg-3 edge-item-fix position-relative flex-wrap flex-justify-between d-flex flex-items-center ">
                <details class="HeaderMenu-details details-overlay details-reset width-full">
                  <summary class="HeaderMenu-summary HeaderMenu-link px-0 py-3 border-0 no-wrap d-block d-lg-inline-block">
                    Explore
                    <svg x="0px" y="0px" viewBox="0 0 14 8" xml:space="preserve" fill="none" class="icon-chevon-down-mktg position-absolute position-lg-relative">
                      <path d="M1,1l6.2,6L13,1"></path>
                    </svg>
                  </summary>

                  <div class="dropdown-menu flex-auto rounded-1 bg-white px-0 pt-2 pb-0 mt-0 pb-4 p-lg-4 position-relative position-lg-absolute left-0 left-lg-n4">
                    <ul class="list-style-none mb-3">
                      <li class="edge-item-fix"><a href="/explore" class="py-2 lh-condensed-ultra d-block link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Explore">Explore GitHub <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                    </ul>

                    <h4 class="text-gray-light text-normal text-mono f5 mb-2 border-lg-top pt-lg-3">Learn &amp; contribute</h4>
                    <ul class="list-style-none mb-3">
                      <li class="edge-item-fix"><a href="/topics" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Topics">Topics</a></li>
                        <li class="edge-item-fix"><a href="/collections" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Collections">Collections</a></li>
                      <li class="edge-item-fix"><a href="/trending" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Trending">Trending</a></li>
                      <li class="edge-item-fix"><a href="https://lab.github.com/" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Learning lab">Learning Lab</a></li>
                      <li class="edge-item-fix"><a href="https://opensource.guide" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Open source guides">Open source guides</a></li>
                    </ul>

                    <h4 class="text-gray-light text-normal text-mono f5 mb-2 border-lg-top pt-lg-3">Connect with others</h4>
                    <ul class="list-style-none mb-0">
                      <li class="edge-item-fix"><a href="https://github.com/events" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Events">Events</a></li>
                      <li class="edge-item-fix"><a href="https://github.community" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Community forum">Community forum</a></li>
                      <li class="edge-item-fix"><a href="https://education.github.com" class="py-2 pb-0 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to GitHub Education">GitHub Education</a></li>
                    </ul>
                  </div>
                </details>
              </li>

              <li class="border-bottom border-lg-bottom-0 mr-0 mr-lg-3">
                <a href="/marketplace" class="HeaderMenu-link no-underline py-3 d-block d-lg-inline-block" data-ga-click="(Logged out) Header, go to Marketplace">Marketplace</a>
              </li>

              <li class="d-block d-lg-flex flex-lg-nowrap flex-lg-items-center border-bottom border-lg-bottom-0 mr-0 mr-lg-3 edge-item-fix position-relative flex-wrap flex-justify-between d-flex flex-items-center ">
                <details class="HeaderMenu-details details-overlay details-reset width-full">
                  <summary class="HeaderMenu-summary HeaderMenu-link px-0 py-3 border-0 no-wrap d-block d-lg-inline-block">
                    Pricing
                    <svg x="0px" y="0px" viewBox="0 0 14 8" xml:space="preserve" fill="none" class="icon-chevon-down-mktg position-absolute position-lg-relative">
                       <path d="M1,1l6.2,6L13,1"></path>
                    </svg>
                  </summary>

                  <div class="dropdown-menu flex-auto rounded-1 bg-white px-0 pt-2 pb-4 mt-0 p-lg-4 position-relative position-lg-absolute left-0 left-lg-n4">
                    <a href="/pricing" class="pb-2 lh-condensed-ultra d-block link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Pricing">Plans <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a>

                    <ul class="list-style-none mb-3">
                      <li class="edge-item-fix"><a href="/pricing#feature-comparison" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Compare plans">Compare plans</a></li>
                      <li class="edge-item-fix"><a href="https://enterprise.github.com/contact" class="py-2 lh-condensed-ultra d-block link-gray no-underline f5" data-ga-click="(Logged out) Header, go to Contact Sales">Contact Sales</a></li>
                    </ul>

                    <ul class="list-style-none mb-0 border-lg-top pt-lg-3">
                      <li class="edge-item-fix"><a href="/nonprofit" class="py-2 lh-condensed-ultra d-block no-underline link-gray-dark no-underline h5 Bump-link--hover" data-ga-click="(Logged out) Header, go to Nonprofits">Nonprofit <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                      <li class="edge-item-fix"><a href="https://education.github.com" class="py-2 pb-0 lh-condensed-ultra d-block no-underline link-gray-dark no-underline h5 Bump-link--hover"  data-ga-click="(Logged out) Header, go to Education">Education <span class="Bump-link-symbol float-right text-normal text-gray-light">&rarr;</span></a></li>
                    </ul>
                  </div>
                </details>
              </li>
          </ul>
        </nav>

      <div class="d-lg-flex flex-items-center px-3 px-lg-0 text-center text-lg-left">
          <div class="d-lg-flex mb-3 mb-lg-0">
            <div class="header-search flex-self-stretch flex-lg-self-auto mr-0 mr-lg-3 mb-3 mb-lg-0 scoped-search site-scoped-search js-site-search position-relative js-jump-to"
  role="combobox"
  aria-owns="jump-to-results"
  aria-label="Search or jump to"
  aria-haspopup="listbox"
  aria-expanded="false"
>
  <div class="position-relative">
    <!-- '"` --><!-- </textarea></xmp> --></option></form><form class="js-site-search-form" role="search" aria-label="Site" data-scope-type="Repository" data-scope-id="241895102" data-scoped-search-url="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/search" data-unscoped-search-url="/search" action="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/search" accept-charset="UTF-8" method="get">
      <label class="form-control input-sm header-search-wrapper p-0 header-search-wrapper-jump-to position-relative d-flex flex-justify-between flex-items-center js-chromeless-input-container">
        <input type="text"
          class="form-control input-sm header-search-input jump-to-field js-jump-to-field js-site-search-focus js-site-search-field is-clearable"
          data-hotkey="s,/"
          name="q"
          value=""
          placeholder="Search"
          data-unscoped-placeholder="Search GitHub"
          data-scoped-placeholder="Search"
          autocapitalize="off"
          aria-autocomplete="list"
          aria-controls="jump-to-results"
          aria-label="Search"
          data-jump-to-suggestions-path="/_graphql/GetSuggestedNavigationDestinations"
          spellcheck="false"
          autocomplete="off"
          >
          <input type="hidden" data-csrf="true" class="js-data-jump-to-suggestions-path-csrf" value="gbAZjR+PCrAZvA34VnX5/0ozP4miZXormo3MKsYgQfTdihgsuoIzYs+Y7Qm3sqFFETFL432hewE8qJUt4WEDoQ==" />
          <input type="hidden" class="js-site-search-type-field" name="type" >
            <img src="https://github.githubassets.com/images/search-key-slash.svg" alt="" class="mr-2 header-search-key-slash">

            <div class="Box position-absolute overflow-hidden d-none jump-to-suggestions js-jump-to-suggestions-container">
              
<ul class="d-none js-jump-to-suggestions-template-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-suggestion" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 12 16" version="1.1" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 15 16" version="1.1" role="img"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 00-1 1v14a1 1 0 001 1h13a1 1 0 001-1V1a1 1 0 00-1-1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0013 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 000-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"/></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this repository">
        In this repository
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>

</ul>

<ul class="d-none js-jump-to-no-results-template-container">
  <li class="d-flex flex-justify-center flex-items-center f5 d-none js-jump-to-suggestion p-2">
    <span class="text-gray">No suggested jump to results</span>
  </li>
</ul>

<ul id="jump-to-results" role="listbox" class="p-0 m-0 js-navigation-container jump-to-suggestions-results-container js-jump-to-suggestions-results-container">
  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-scoped-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 12 16" version="1.1" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 15 16" version="1.1" role="img"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 00-1 1v14a1 1 0 001 1h13a1 1 0 001-1V1a1 1 0 00-1-1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0013 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 000-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"/></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this repository">
        In this repository
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>

  

<li class="d-flex flex-justify-start flex-items-center p-0 f5 navigation-item js-navigation-item js-jump-to-global-search d-none" role="option">
  <a tabindex="-1" class="no-underline d-flex flex-auto flex-items-center jump-to-suggestions-path js-jump-to-suggestion-path js-navigation-open p-2" href="">
    <div class="jump-to-octicon js-jump-to-octicon flex-shrink-0 mr-2 text-center d-none">
      <svg height="16" width="16" class="octicon octicon-repo flex-shrink-0 js-jump-to-octicon-repo d-none" title="Repository" aria-label="Repository" viewBox="0 0 12 16" version="1.1" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-project flex-shrink-0 js-jump-to-octicon-project d-none" title="Project" aria-label="Project" viewBox="0 0 15 16" version="1.1" role="img"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 00-1 1v14a1 1 0 001 1h13a1 1 0 001-1V1a1 1 0 00-1-1z"/></svg>
      <svg height="16" width="16" class="octicon octicon-search flex-shrink-0 js-jump-to-octicon-search d-none" title="Search" aria-label="Search" viewBox="0 0 16 16" version="1.1" role="img"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0013 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 000-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"/></svg>
    </div>

    <img class="avatar mr-2 flex-shrink-0 js-jump-to-suggestion-avatar d-none" alt="" aria-label="Team" src="" width="28" height="28">

    <div class="jump-to-suggestion-name js-jump-to-suggestion-name flex-auto overflow-hidden text-left no-wrap css-truncate css-truncate-target">
    </div>

    <div class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none js-jump-to-badge-search">
      <span class="js-jump-to-badge-search-text-default d-none" aria-label="in this repository">
        In this repository
      </span>
      <span class="js-jump-to-badge-search-text-global d-none" aria-label="in all of GitHub">
        All GitHub
      </span>
      <span aria-hidden="true" class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>

    <div aria-hidden="true" class="border rounded-1 flex-shrink-0 bg-gray px-1 text-gray-light ml-1 f6 d-none d-on-nav-focus js-jump-to-badge-jump">
      Jump to
      <span class="d-inline-block ml-1 v-align-middle">↵</span>
    </div>
  </a>
</li>


</ul>

            </div>
      </label>
</form>  </div>
</div>

          </div>

        <a href="/login?return_to=%2Fastroidex%2Ffossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde%2Fblob%2Fmaster%2Ffossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md"
          class="HeaderMenu-link no-underline mr-3"
          data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;site header menu&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;originating_url&quot;:&quot;https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="a384eac19aefb2449f941b1056dab593c118c0fe5486cbf85f7fc198d81b3b4d"
          data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">
          Sign&nbsp;in
        </a>
          <a href="/join?source=header-repo&amp;source_repo=astroidex%2Ffossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde"
            class="HeaderMenu-link d-inline-block no-underline border border-gray-dark rounded-1 px-2 py-1"
            data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;site header menu&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;originating_url&quot;:&quot;https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="a384eac19aefb2449f941b1056dab593c118c0fe5486cbf85f7fc198d81b3b4d"
            data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">
            Sign&nbsp;up
          </a>
      </div>
    </div>
  </div>
</header>

  </div>

  <div id="start-of-content" class="show-on-focus"></div>


    <div id="js-flash-container">

</div>


      

  <include-fragment class="js-notification-shelf-include-fragment" data-base-src="https://github.com/notifications/beta/shelf"></include-fragment>




  <div class="application-main " data-commit-hovercards-enabled>
        <div itemscope itemtype="http://schema.org/SoftwareSourceCode" class="">
    <main  >
      

  











  <div class="pagehead repohead hx_repohead readability-menu bg-gray-light pb-0 pt-0 pt-lg-3">

    <div class="d-flex container-lg mb-4 p-responsive d-none d-lg-flex">

      <div class="flex-auto min-width-0 width-fit mr-3">
        <h1 class="public  d-flex flex-wrap flex-items-center break-word float-none ">
    <svg class="octicon octicon-repo" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
  <span class="author ml-1 flex-self-stretch" itemprop="author">
    <a class="url fn" rel="author" data-hovercard-type="user" data-hovercard-url="/users/astroidex/hovercard" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="/astroidex">astroidex</a>
  </span>
  <span class="path-divider flex-self-stretch">/</span>
  <strong itemprop="name" class="mr-2 flex-self-stretch">
    <a data-pjax="#js-repo-pjax-container" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde">fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde</a>
  </strong>
  
</h1>


      </div>

      <ul class="pagehead-actions flex-shrink-0 " >




  <li>
    
  <a class="tooltipped tooltipped-s btn btn-sm btn-with-count" aria-label="You must be signed in to watch a repository" rel="nofollow" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;notification subscription menu watch&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;LOG_IN&quot;,&quot;originating_url&quot;:&quot;https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="8a55c9a4998bf928e846cd6e7a3a03d919c222655c350bafba2886de48257a76" href="/login?return_to=%2Fastroidex%2Ffossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde">
    <svg class="octicon octicon-eye v-align-text-bottom" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
    Watch
</a>    <a class="social-count" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/watchers"
       aria-label="1 user is watching this repository">
      1
    </a>

  </li>

  <li>
        <a class="btn btn-sm btn-with-count tooltipped tooltipped-s" aria-label="You must be signed in to star a repository" rel="nofollow" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;star button&quot;,&quot;repository_id&quot;:241895102,&quot;auth_type&quot;:&quot;LOG_IN&quot;,&quot;originating_url&quot;:&quot;https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="bda7692fd818fefee59cc3538874d17179a97d3dd604c2421ed79de87eb7e0ea" href="/login?return_to=%2Fastroidex%2Ffossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde">
      <svg height="16" class="octicon octicon-star v-align-text-bottom" vertical_align="text_bottom" viewBox="0 0 14 16" version="1.1" width="14" aria-hidden="true"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74L14 6z"/></svg>

      Star
</a>
    <a class="social-count js-social-count" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/stargazers"
      aria-label="1 user starred this repository">
      1
    </a>

  </li>

  <li>
      <a class="btn btn-sm btn-with-count tooltipped tooltipped-s" aria-label="You must be signed in to fork a repository" rel="nofollow" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;repo details fork button&quot;,&quot;repository_id&quot;:241895102,&quot;auth_type&quot;:&quot;LOG_IN&quot;,&quot;originating_url&quot;:&quot;https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="1ab2c746f405cc362b13598c77824c82e7d588f54058f896ca05fee67ac8c0f5" href="/login?return_to=%2Fastroidex%2Ffossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde">
        <svg class="octicon octicon-repo-forked v-align-text-bottom" viewBox="0 0 10 16" version="1.1" width="10" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 1a1.993 1.993 0 00-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 002 1a1.993 1.993 0 00-1 3.72V6.5l3 3v1.78A1.993 1.993 0 005 15a1.993 1.993 0 001-3.72V9.5l3-3V4.72A1.993 1.993 0 008 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
        Fork
</a>
    <a href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/network/members" class="social-count"
       aria-label="0 users forked this repository">
      0
    </a>
  </li>
</ul>

    </div>
      
<nav class="hx_reponav reponav js-repo-nav js-sidenav-container-pjax clearfix container-lg p-responsive d-none d-lg-block"
     itemscope
     itemtype="http://schema.org/BreadcrumbList"
    aria-label="Repository"
     data-pjax="#js-repo-pjax-container">

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a class="js-selected-navigation-item selected reponav-item" itemprop="url" data-hotkey="g c" aria-current="page" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches repo_packages /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde">
      <div class="d-inline"><svg class="octicon octicon-code" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/></svg></div>
      <span itemprop="name">Code</span>
      <meta itemprop="position" content="1">
</a>  </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" data-hotkey="g i" class="js-selected-navigation-item reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/issues" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/issues">
        <div class="d-inline"><svg class="octicon octicon-issue-opened" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 011.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"/></svg></div>
        <span itemprop="name">Issues</span>
        <span class="Counter">0</span>
        <meta itemprop="position" content="2">
</a>    </span>

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a data-hotkey="g p" data-skip-pjax="true" itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_pulls checks /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/pulls" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/pulls">
      <div class="d-inline"><svg class="octicon octicon-git-pull-request" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M11 11.28V5c-.03-.78-.34-1.47-.94-2.06C9.46 2.35 8.78 2.03 8 2H7V0L4 3l3 3V4h1c.27.02.48.11.69.31.21.2.3.42.31.69v6.28A1.993 1.993 0 0010 15a1.993 1.993 0 001-3.72zm-1 2.92c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zM4 3c0-1.11-.89-2-2-2a1.993 1.993 0 00-1 3.72v6.56A1.993 1.993 0 002 15a1.993 1.993 0 001-3.72V4.72c.59-.34 1-.98 1-1.72zm-.8 10c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg></div>
      <span itemprop="name">Pull requests</span>
      <span class="Counter">0</span>
      <meta itemprop="position" content="4">
</a>  </span>


    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement" class="position-relative float-left">
      <a data-hotkey="g w" data-skip-pjax="true" class="js-selected-navigation-item reponav-item" data-selected-links="repo_actions /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/actions" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/actions">
        <div class="d-inline"><svg class="octicon octicon-play" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M14 8A7 7 0 110 8a7 7 0 0114 0zm-8.223 3.482l4.599-3.066a.5.5 0 000-.832L5.777 4.518A.5.5 0 005 4.934v6.132a.5.5 0 00.777.416z"/></svg></div>
        Actions
</a>
    </span>

    <a data-hotkey="g b" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/projects" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/projects">
      <div class="d-inline"><svg class="octicon octicon-project" viewBox="0 0 15 16" version="1.1" width="15" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 00-1 1v14a1 1 0 001 1h13a1 1 0 001-1V1a1 1 0 00-1-1z"/></svg></div>
      Projects
      <span class="Counter">0</span>
</a>

    <a data-skip-pjax="true" class="js-selected-navigation-item reponav-item" data-selected-links="security alerts policy token_scanning code_scanning /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/security/advisories" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/security/advisories">
      <div class="d-inline"><svg class="octicon octicon-shield" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 2l7-2 7 2v6.02C14 12.69 8.69 16 7 16c-1.69 0-7-3.31-7-7.98V2zm1 .75L7 1l6 1.75v5.268C13 12.104 8.449 15 7 15c-1.449 0-6-2.896-6-6.982V2.75zm1 .75L7 2v12c-1.207 0-5-2.482-5-5.985V3.5z"/></svg></div>
      Security
</a>
    <a class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors dependency_graph dependabot_updates pulse people /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/pulse" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/pulse">
      <div class="d-inline"><svg class="octicon octicon-graph" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M16 14v1H0V0h1v14h15zM5 13H3V8h2v5zm4 0H7V3h2v10zm4 0h-2V6h2v7z"/></svg></div>
      Insights
</a>

</nav>

  <div class="reponav-wrapper reponav-small d-lg-none">
  <nav class="reponav js-reponav text-center no-wrap"
       itemscope
       itemtype="http://schema.org/BreadcrumbList">

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a class="js-selected-navigation-item selected reponav-item" itemprop="url" aria-current="page" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches repo_packages /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde">
        <span itemprop="name">Code</span>
        <meta itemprop="position" content="1">
</a>    </span>

      <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
        <a itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/issues" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/issues">
          <span itemprop="name">Issues</span>
          <span class="Counter">0</span>
          <meta itemprop="position" content="2">
</a>      </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_pulls checks /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/pulls" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/pulls">
        <span itemprop="name">Pull requests</span>
        <span class="Counter">0</span>
        <meta itemprop="position" content="4">
</a>    </span>


      <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
        <a itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/projects" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/projects">
          <span itemprop="name">Projects</span>
          <span class="Counter">0</span>
          <meta itemprop="position" content="5">
</a>      </span>

      <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
        <a itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_actions /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/actions" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/actions">
          <span itemprop="name">Actions</span>
          <meta itemprop="position" content="6">
</a>      </span>


      <a itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="security alerts policy token_scanning code_scanning /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/security/advisories" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/security/advisories">
        <span itemprop="name">Security</span>
        <meta itemprop="position" content="8">
</a>
      <a class="js-selected-navigation-item reponav-item" data-selected-links="pulse /astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/pulse" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/pulse">
        Pulse
</a>

  </nav>
</div>


  </div>

  

  <include-fragment class="js-notification-shelf-include-fragment" data-base-src="https://github.com/notifications/beta/shelf"></include-fragment>


<div class="container-lg clearfix new-discussion-timeline  p-responsive">
  <div class="repository-content ">

    
    


  


    <a class="d-none js-permalink-shortcut" data-hotkey="y" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/f3bed99c10e91587b790bde9a87230a288ed69df/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md">Permalink</a>

    <!-- blob contrib key: blob_contributors:v22:1d83a46a9ee1b17517016603996aaa64 -->
      <div class="signup-prompt-bg rounded-1 js-signup-prompt" data-prompt="signup" hidden>
    <div class="signup-prompt p-4 text-center mb-4 rounded-1">
      <div class="position-relative">
        <button type="button" class="position-absolute top-0 right-0 btn-link link-gray js-signup-prompt-button" data-ga-click="(Logged out) Sign up prompt, clicked Dismiss, text:dismiss">
          Dismiss
        </button>
        <h3 class="pt-2">Join GitHub today</h3>
        <p class="col-6 mx-auto">GitHub is home to over 40 million developers working together to host and review code, manage projects, and build software together.</p>
        <a class="btn btn-primary" data-ga-click="(Logged out) Sign up prompt, clicked Sign up, text:sign-up" data-hydro-click="{&quot;event_type&quot;:&quot;authentication.click&quot;,&quot;payload&quot;:{&quot;location_in_page&quot;:&quot;files signup prompt&quot;,&quot;repository_id&quot;:null,&quot;auth_type&quot;:&quot;SIGN_UP&quot;,&quot;originating_url&quot;:&quot;https://github.com/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="fc38455fb46c82fec708f0f31715290fe58ad8f6131b8e85fb263e10080fdaab" href="/join?source=prompt-blob-show&amp;source_repo=astroidex%2Ffossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde">Sign up</a>
      </div>
    </div>
  </div>


    <div class="d-flex flex-items-start flex-shrink-0 flex-column flex-md-row pb-3">
      <span class="d-flex flex-justify-between width-full width-md-auto">
        
<details class="details-reset details-overlay branch-select-menu " id="branch-select-menu">
  <summary class="btn btn-sm css-truncate"
           data-hotkey="w"
           title="Switch branches or tags">
    <i>Branch:</i>
    <span class="css-truncate-target" data-menu-button>master</span>
    <span class="dropdown-caret"></span>
  </summary>

  <details-menu class="SelectMenu SelectMenu--hasFilter" src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/refs/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md?source_action=show&amp;source_controller=blob" preload>
    <div class="SelectMenu-modal">
      <include-fragment class="SelectMenu-loading" aria-label="Menu is loading">
        <svg class="octicon octicon-octoface anim-pulse" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M14.7 5.34c.13-.32.55-1.59-.13-3.31 0 0-1.05-.33-3.44 1.3-1-.28-2.07-.32-3.13-.32s-2.13.04-3.13.32c-2.39-1.64-3.44-1.3-3.44-1.3-.68 1.72-.26 2.99-.13 3.31C.49 6.21 0 7.33 0 8.69 0 13.84 3.33 15 7.98 15S16 13.84 16 8.69c0-1.36-.49-2.48-1.3-3.35zM8 14.02c-3.3 0-5.98-.15-5.98-3.35 0-.76.38-1.48 1.02-2.07 1.07-.98 2.9-.46 4.96-.46 2.07 0 3.88-.52 4.96.46.65.59 1.02 1.3 1.02 2.07 0 3.19-2.68 3.35-5.98 3.35zM5.49 9.01c-.66 0-1.2.8-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.54-1.78-1.2-1.78zm5.02 0c-.66 0-1.2.79-1.2 1.78s.54 1.79 1.2 1.79c.66 0 1.2-.8 1.2-1.79s-.53-1.78-1.2-1.78z"/></svg>
      </include-fragment>
    </div>
  </details-menu>
</details>

        <div class="BtnGroup flex-shrink-0 d-md-none">
          <a href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/find/master"
                class="js-pjax-capture-input btn btn-sm BtnGroup-item"
                data-pjax
                data-hotkey="t">
            Find file
          </a>
          <clipboard-copy value="fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md" class="btn btn-sm BtnGroup-item">
            Copy path
          </clipboard-copy>
        </div>
      </span>
      <h2 id="blob-path" class="breadcrumb flex-auto min-width-0 text-normal flex-md-self-center ml-md-2 mr-md-3 my-2 my-md-0">
        <span class="js-repo-root text-bold"><span class="js-path-segment"><a data-pjax="true" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde"><span>fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde</span></a></span></span><span class="separator">/</span><strong class="final-path">fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md</strong>
      </h2>

      <div class="BtnGroup flex-shrink-0 d-none d-md-inline-block">
        <a href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/find/master"
              class="js-pjax-capture-input btn btn-sm BtnGroup-item"
              data-pjax
              data-hotkey="t">
          Find file
        </a>
        <clipboard-copy value="fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md" class="btn btn-sm BtnGroup-item">
          Copy path
        </clipboard-copy>
      </div>
    </div>



    <include-fragment src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/contributors/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md" class="Box Box--condensed commit-loader">
      <div class="Box-body bg-blue-light f6">
        Fetching contributors&hellip;
      </div>

      <div class="Box-body d-flex flex-items-center" >
        <img alt="" class="loader-loading mr-2" src="https://github.githubassets.com/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" height="16" />
        <span class="text-red h6 loader-error">Cannot retrieve contributors at this time</span>
      </div>
</include-fragment>





    <div class="Box mt-3 position-relative
      ">
      
<div class="Box-header py-2 d-flex flex-column flex-shrink-0 flex-md-row flex-md-items-center">
  <div class="text-mono f6 flex-auto pr-3 flex-order-2 flex-md-order-1 mt-2 mt-md-0">

      765 lines (548 sloc)
      <span class="file-info-divider"></span>
    23.6 KB
  </div>

  <div class="d-flex py-1 py-md-0 flex-auto flex-order-1 flex-md-order-2 flex-sm-grow-0 flex-justify-between">

    <div class="BtnGroup">
      <a id="raw-url" class="btn btn-sm BtnGroup-item" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md">Raw</a>
        <a class="btn btn-sm js-update-url-with-hash BtnGroup-item" data-hotkey="b" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blame/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md">Blame</a>
      <a rel="nofollow" class="btn btn-sm BtnGroup-item" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/commits/master/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde.md">History</a>
    </div>


    <div>
          <a class="btn-octicon tooltipped tooltipped-nw js-remove-unless-platform"
             data-platforms="windows,mac"
             href="https://desktop.github.com"
             aria-label="Open this file in GitHub Desktop"
             data-ga-click="Repository, open with desktop">
              <svg class="octicon octicon-device-desktop" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M15 2H1c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5.34c-.25.61-.86 1.39-2.34 2h8c-1.48-.61-2.09-1.39-2.34-2H15c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm0 9H1V3h14v8z"/></svg>
          </a>

          <button type="button" class="btn-octicon disabled tooltipped tooltipped-nw"
            aria-label="You must be signed in to make or propose changes">
            <svg class="octicon octicon-pencil" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 011.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"/></svg>
          </button>
          <button type="button" class="btn-octicon btn-octicon-danger disabled tooltipped tooltipped-nw"
            aria-label="You must be signed in to make or propose changes">
            <svg class="octicon octicon-trashcan" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M11 2H9c0-.55-.45-1-1-1H5c-.55 0-1 .45-1 1H2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1v9c0 .55.45 1 1 1h7c.55 0 1-.45 1-1V5c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm-1 12H3V5h1v8h1V5h1v8h1V5h1v8h1V5h1v9zm1-10H2V3h9v1z"/></svg>
          </button>
    </div>
  </div>
</div>




      
  <div id="readme" class="Box-body readme blob js-code-block-container">
    <article class="markdown-body entry-content p-3 p-md-6" itemprop="text"><h1><a id="user-content-workshop-postgresqlpostgis-für-einsteiger" class="anchor" aria-hidden="true" href="#workshop-postgresqlpostgis-für-einsteiger"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Workshop PostgreSQL/PostGIS für Einsteiger</h1>
<p><a href="https://www.fossgis-konferenz.de/2020/" rel="nofollow">FOSSGIS 2020 Workshop in Freiburg März 2020</a></p>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/fossgis20-logo.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/fossgis20-logo.png" alt="" style="max-width:100%;"></a> <a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/postgresql_postgis.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/postgresql_postgis.png" alt="" style="max-width:100%;"></a></p>
<p><a href="https://creativecommons.org/licenses/by-sa/4.0/deed.de" rel="nofollow"><img src="https://camo.githubusercontent.com/bcf3a6ab4e230bba5dccd17c141539d8294228ff/687474703a2f2f692e6372656174697665636f6d6d6f6e732e6f72672f6c2f62792d73612f342e302f38387833312e706e67" alt="Creative Commons License" data-canonical-src="http://i.creativecommons.org/l/by-sa/4.0/88x31.png" style="max-width:100%;"></a></p>
<h2><a id="user-content-astrid-emde" class="anchor" aria-hidden="true" href="#astrid-emde"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Astrid Emde</h2>
<ul>
<li>Astrid Emde</li>
<li>WhereGroup GmbH</li>
<li><a href="mailto:astrid.emde@wheregroup.com">astrid.emde@wheregroup.com</a></li>
<li><a href="https://twitter.com/astroidex" rel="nofollow">@astroidex</a></li>
</ul>
<h2><a id="user-content-lina-dillmann" class="anchor" aria-hidden="true" href="#lina-dillmann"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Lina Dillmann</h2>
<ul>
<li>WhereGroup GmbH</li>
<li><a href="mailto:lina.dillmann@wheregroup.com">lina.dillmann@wheregroup.com</a></li>
<li><a href="https://twitter.com/LinaDillmann" rel="nofollow"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/twitter.png" alt="@LinaDillmann on twitter" style="max-width:100%;"></a> <a href="https://twitter.com/LinaDillmann" rel="nofollow">@LinaDillmann</a></li>
</ul>
<h2><a id="user-content-leoni-möske" class="anchor" aria-hidden="true" href="#leoni-möske"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Leoni Möske</h2>
<ul>
<li>WhereGroup GmbH</li>
<li><a href="mailto:leoni.moeske@wheregroup.com">leoni.moeske@wheregroup.com</a></li>
</ul>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/WhereGroup.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/WhereGroup.png" alt="" style="max-width:100%;"></a></p>
<ul>
<li>FOSS Academy <a href="https://www.foss-academy.com/" rel="nofollow">https://www.foss-academy.com/</a></li>
</ul>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/FOSSAcademy.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/FOSSAcademy.png" alt="" style="max-width:100%;"></a></p>
<h2><a id="user-content-die-themen" class="anchor" aria-hidden="true" href="#die-themen"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Die Themen</h2>
<ul>
<li>Warum lohnt sich der Einsatz einer Datenbank?</li>
<li>PostgreSQL / PostGIS</li>
<li>SQL-Einführung</li>
<li>Import / Export von Daten</li>
<li>Räumliche Funktionen</li>
<li>Räumlicher Index</li>
<li>Rollen &amp; Kontrolle über den Zugriff auf die Daten</li>
</ul>
<h2><a id="user-content-osgeolive" class="anchor" aria-hidden="true" href="#osgeolive"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>OSGeoLive</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/osgeolive.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/osgeolive.png" alt="" style="max-width:100%;"></a></p>
<p>Dieser Workshop nutzt OSGeoLive (<a href="https://live.osgeo.org" rel="nofollow">https://live.osgeo.org</a>) Version 13.0 (Release August 2019). OSGeoLive basiert auf Lubuntu und beinhaltet eine Kollektion aus mehr als 50 vorinstallierten Software-Projekten. OSGeoLive beinhaltet außerdem Beispieldaten, die für diesen Workshop verwendet werden.</p>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/osgeolive_menu.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/osgeolive_menu.png" alt="" style="max-width:100%;"></a></p>
<p>OSGeoLive kann über den folgenden Link heruntergeladen werden. Sie können OSGeoLive in einer Virtuellen Maschine (empfohlen) oder über einen USB-Stick nutzen.</p>
<ul>
<li>Download OSGeoLive Image <a href="http://live.osgeo.org/en/download.html" rel="nofollow">http://live.osgeo.org/en/download.html</a></li>
<li>Dokumentation <a href="https://live.osgeo.org/" rel="nofollow">https://live.osgeo.org/</a></li>
<li>PostGIS Übersicht (OSGeoLive Overview) <a href="https://live.osgeo.org/en/overview/postgis_overview.html" rel="nofollow">https://live.osgeo.org/en/overview/postgis_overview.html</a></li>
<li>PostGIS Einstieg (OSGeoLive Quickstart) <a href="https://live.osgeo.org/en/quickstart/postgis_quickstart.html" rel="nofollow">https://live.osgeo.org/en/quickstart/postgis_quickstart.html</a></li>
</ul>
<h2><a id="user-content-aktuelle-software-version" class="anchor" aria-hidden="true" href="#aktuelle-software-version"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Aktuelle Software Version</h2>
<ul>
<li>PostgreSQL 11.2 (2019-02-14) <a href="https://www.postgresql.org/" rel="nofollow">https://www.postgresql.org/</a></li>
<li>PostGIS 2.5.1 (2018-11-18) <a href="http://www.postgis.org/" rel="nofollow">http://www.postgis.org/</a></li>
</ul>
<h3><a id="user-content-osgeolive-130" class="anchor" aria-hidden="true" href="#osgeolive-130"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>OSGeoLive 13.0</h3>
<ul>
<li>PostgreSQL 10.9</li>
<li>PostGIS 2.5.2</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> version(), postgis_version(), postgis_full_version();</pre></div>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/pgadmin_pg_version.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/pgadmin_pg_version.png" alt="" style="max-width:100%;"></a></p>
<h2><a id="user-content-daten" class="anchor" aria-hidden="true" href="#daten"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Daten</h2>
<ul>
<li>Natural Earth II</li>
<li>Daten liegen als ESRI Shapedateien vor - Länder, Bundesländer, Flüsse, Orte &amp; mehr unter /home/user/data</li>
<li>Datenbank: natural_earth2</li>
<li>OpenStreetMap</li>
<li>Datenbank: osm_local</li>
</ul>
<h2><a id="user-content-zusätzliche-information" class="anchor" aria-hidden="true" href="#zusätzliche-information"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Zusätzliche Information</h2>
<ul>
<li>PostGIS in Action (August 2015, 2. Auflage) Regine Obe, Leo Hsu ISBN 9781617291395</li>
<li>Paul Ramsey Blog Clever Elephant <a href="http://blog.cleverelephant.ca/" rel="nofollow">http://blog.cleverelephant.ca/</a></li>
<li>Clever Elephant ;) <a href="https://www.youtube.com/watch?v=Gw_Q1JClH58" rel="nofollow">https://www.youtube.com/watch?v=Gw_Q1JClH58</a></li>
<li>Postgres OnLine Journal Regine Obe, Leo Hsu <a href="http://www.postgresonline.com/" rel="nofollow">http://www.postgresonline.com/</a></li>
<li>Modern SQL Blog Markus Winand <a href="https://modern-sql.com/slides" rel="nofollow">https://modern-sql.com/slides</a> <a href="https://use-the-index-luke.com/" rel="nofollow">https://use-the-index-luke.com/</a></li>
<li>PostgreSQL books <a href="https://www.postgresql.org/docs/books/" rel="nofollow">https://www.postgresql.org/docs/books/</a></li>
<li>pgRouting: A Practical Guide (Mai 2017, 2. Auflage) Regine Obe, Leo Hsu ISBN: 9780989421737</li>
<li>Information zu Projektionen <a href="http://spatialreference.org/" rel="nofollow">http://spatialreference.org/</a></li>
</ul>
<h2><a id="user-content-warum-lohnt-sich-der-einsatz-einer-datenbank" class="anchor" aria-hidden="true" href="#warum-lohnt-sich-der-einsatz-einer-datenbank"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Warum lohnt sich der Einsatz einer Datenbank?</h2>
<ul>
<li>zentrale Datenhaltung - keine Datenredundanz</li>
<li>Konsistenz der Daten</li>
<li>Mehrbenutzer-Zugriff</li>
<li>Kontrollierter Zugriff über Zugriffskontrolle und -management</li>
<li>Zugriff auf die Daten über unterschiedliche Werkzeuge</li>
<li>Kombination von unterschiedlichen Daten - datenbankweit, datenbankübergreifend und auf Fremdquellen</li>
<li>SQL zur Generierung und Analyse der Daten</li>
<li>Backup, Replikation ...</li>
</ul>
<h2><a id="user-content-postgresql" class="anchor" aria-hidden="true" href="#postgresql"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>PostgreSQL</h2>
<ul>
<li>Unterstützt von zahlreichen anderen Programmen</li>
<li>Schnell, leistungsstark, verlässlich, robust</li>
<li>Einfach zu Warten</li>
<li>Folgt SQL Standards</li>
<li>Schnittstelle zu vielen Programmiersprachen</li>
<li>Subselects, Funktions, Trigger, Foreign Data Wrapper, Replikation &amp; mehr</li>
<li><a href="https://www.postgresql.org/about/" rel="nofollow">https://www.postgresql.org/about/</a></li>
</ul>
<h2><a id="user-content-postgis" class="anchor" aria-hidden="true" href="#postgis"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>PostGIS</h2>
<ul>
<li>Erweiterung (Extension) für PostgreSQL</li>
<li>PostGIS übernimmt die Arbeit, die sonst das DesktopGIS gemacht hat</li>
<li>Folgt Standards:</li>
<li>OGC Simple Feature Spezification for SQL</li>
<li>OGC ISO SQL/MM Spezification</li>
<li>Stellt zahlreiche räumliche Funktionen bereit</li>
<li>Breite Unterstützung durch andere Programme</li>
<li>Leichter Import / Export von räumlichen Daten (QGIS DB-Verwaltung, shp2pgsql, pgsql2shp, ogr2ogr, dxf2postgis, osm2pgsql)</li>
<li>Die Vorteile von PostgreSQL können genutzt werden (Benutzerverwaltung, Replication, Indezierung &amp; mehr)</li>
<li>Sehr leistungsstark: Unterstützung von Vektor- &amp; Rasterdaten, geometry (planar Daten) und geography (spheroid), kreisförmige Objekte, 3D-, 4D-Objekte, Punktwolken, Routing über pg_routing, Topologien</li>
<li>Daten werden als WKB (Well-known Binary) gespeichert. WKT (Well-known text) zur lesbaren Ausgabe.</li>
<li><a href="http://postgis.net/" rel="nofollow">http://postgis.net/</a></li>
<li><a href="http://postgis.net/docs/manual-2.5/" rel="nofollow">http://postgis.net/docs/manual-2.5/</a></li>
</ul>
<h2><a id="user-content-datenbank-clients" class="anchor" aria-hidden="true" href="#datenbank-clients"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Datenbank-Clients</h2>
<ul>
<li>pgAdmin 4 und pgAdmin III <a href="https://www.pgadmin.org/" rel="nofollow">https://www.pgadmin.org/</a></li>
<li>psql kommandozeilen basierter Client <a href="https://www.postgresql.org/docs/current/static/app-psql.html" rel="nofollow">https://www.postgresql.org/docs/current/static/app-psql.html</a></li>
<li>QGIS DB-Verwaltung - integriert in QGIS</li>
<li>DBeaver <a href="https://dbeaver.io/" rel="nofollow">https://dbeaver.io/</a></li>
<li>und viele mehr</li>
</ul>
<h3><a id="user-content-übung-1-pgadmin-und-erste-schritte-im-umgang-mit-der-datenbank" class="anchor" aria-hidden="true" href="#übung-1-pgadmin-und-erste-schritte-im-umgang-mit-der-datenbank"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 1: pgAdmin und erste Schritte im Umgang mit der Datenbank</h3>
<ol>
<li>Öffnen Sie pgAdmin über Start -&gt; Geospatial -&gt; Datenbank -&gt; pgAdmin</li>
<li>Stellen Sie eine Verbindung zur Datenbank <strong><em>natural_earth2</em></strong> her</li>
<li>Gehen Sie in das Schema <strong><em>public</em></strong> und schauen Sie sich die Tabellen an</li>
<li>Öffnen Sie eine Tabelle und schauen Sie sich die Geometriespalte (geom) an. Können Sie die Geometrie lesen?</li>
<li>Öffnen Sie die Tabelle <strong><em>spatial_ref_sys</em></strong> und filtern Sie nach srid = 4326</li>
<li>Gehen Sie zu public -&gt; views (Ansichten) und öffnen Sie die Metadaten-Sicht <strong><em>geometry_columns</em></strong></li>
</ol>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/pgadmin_pg_query.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/pgadmin_pg_query.png" alt="" style="max-width:100%;"></a></p>
<h2><a id="user-content-wie-erfolgt-die-kommunikation-mit-der-datenbank" class="anchor" aria-hidden="true" href="#wie-erfolgt-die-kommunikation-mit-der-datenbank"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Wie erfolgt die Kommunikation mit der Datenbank?</h2>
<ul>
<li>über SQL - Structured Query Language</li>
<li>DDL - data definition language</li>
<li>DML - data manipulation language</li>
<li>DQL - data query language</li>
</ul>
<h3><a id="user-content-dql" class="anchor" aria-hidden="true" href="#dql"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DQL</h3>
<ul>
<li>DQL - zur Abfrage von Daten (DQL ist ein Teil der DML)
z.B. zur Anzeige aller Daten aus der Tabelle <strong><em>spatial_ref_sys</em></strong>, bei denen srid = 4326 ist.</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> <span class="pl-k">*</span> <span class="pl-k">FROM</span> spatial_ref_sys <span class="pl-k">WHERE</span> srid<span class="pl-k">=</span><span class="pl-c1">4326</span>;</pre></div>
<h3><a id="user-content-ddl" class="anchor" aria-hidden="true" href="#ddl"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DDL</h3>
<ul>
<li>DDL zur Erzeugung von neuen Strukturen wie Datenbanken, Tabellen, Rollen, Schemata &amp; mehr.</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">DATABASE</span> <span class="pl-en">demo</span>;</pre></div>
<ul>
<li>
<p>Verbinden Sie sich mit der Datenbank <strong><em>demo</em></strong>. Frischen Sie
dazu die Liste der Datenbanken auf und wählen Sie anschließend die Datenbank <strong><em>demo</em></strong> aus.</p>
</li>
<li>
<p>Erzeugen Sie die Tabelle <strong><em>poi</em></strong>.</p>
</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">TABLE</span> <span class="pl-en">pois</span>(
 gid <span class="pl-k">serial</span> <span class="pl-k">PRIMARY KEY</span>,
 name <span class="pl-k">varchar</span>,
 year <span class="pl-k">int</span>,
 info <span class="pl-k">varchar</span>
);</pre></div>
<p>Änderungen der Tabellenstruktur</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">ALTER</span> <span class="pl-k">TABLE</span> pois ADD COLUMN land <span class="pl-k">varchar</span>;
<span class="pl-k">ALTER</span> <span class="pl-k">TABLE</span> pois RENAME land TO country;
<span class="pl-k">ALTER</span> <span class="pl-k">TABLE</span> pois DROP COLUMN country;
<span class="pl-k">ALTER</span> <span class="pl-k">TABLE</span> pois ADD <span class="pl-k">CONSTRAINT</span> pk_gid <span class="pl-k">PRIMARY KEY</span> (gid); </pre></div>
<p>Löschen einer Tabelle</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">DROP</span> <span class="pl-k">TABLE</span> pois;</pre></div>
<h3><a id="user-content-dml" class="anchor" aria-hidden="true" href="#dml"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DML</h3>
<ul>
<li>Manipulation von Daten - Erzeugen, Löschen, Verändern von Daten</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">INSERT INTO</span> pois (name, year, info) <span class="pl-k">VALUES</span> 
(
<span class="pl-s"><span class="pl-pds">'</span>Kölner Dom<span class="pl-pds">'</span></span>,
<span class="pl-c1">1248</span>,
<span class="pl-s"><span class="pl-pds">'</span>https://en.wikipedia.org/wiki/Cologne_Cathedral<span class="pl-pds">'</span></span>
);</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">UPDATE</span> pois <span class="pl-k">SET</span> name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Cologne Cathedral<span class="pl-pds">'</span></span> <span class="pl-k">WHERE</span> name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Kölner Dom<span class="pl-pds">'</span></span>;</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">DELETE</span> <span class="pl-k">FROM</span> pois <span class="pl-k">WHERE</span> name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Kölner Dom<span class="pl-pds">'</span></span>;
<span class="pl-k">DELETE</span> <span class="pl-k">FROM</span> pois; <span class="pl-c"><span class="pl-c">--</span> löscht die gesamten Daten</span>
<span class="pl-k">DELETE</span> <span class="pl-k">FROM</span> pois <span class="pl-k">WHERE</span> gid <span class="pl-k">=</span> <span class="pl-c1">1111</span>;</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-c"><span class="pl-c">--</span> Löscht Datensätze mit name "Cologne Cathedral"</span>
<span class="pl-k">DELETE</span> <span class="pl-k">FROM</span> pois <span class="pl-k">WHERE</span> name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Cologne Cathedral<span class="pl-pds">'</span></span>; 
<span class="pl-c"><span class="pl-c">--</span> Löscht alle Datensätze der Tabelle</span>
<span class="pl-k">DELETE</span> <span class="pl-k">FROM</span> pois; 
<span class="pl-c"><span class="pl-c">--</span> Löscht Datensätze mit gid &gt; 1111</span>
<span class="pl-k">DELETE</span> <span class="pl-k">FROM</span> pois <span class="pl-k">WHERE</span> gid <span class="pl-k">&gt;</span> <span class="pl-c1">1111</span>; </pre></div>
<h3><a id="user-content-übung-2-erzeugen-einer-datenbank-mit-postgis-erweiterung" class="anchor" aria-hidden="true" href="#übung-2-erzeugen-einer-datenbank-mit-postgis-erweiterung"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 2: Erzeugen einer Datenbank mit PostGIS-Erweiterung</h3>
<ol>
<li>Legen Sie eine Datenbank mit dem Namen <strong><em>fossgis</em></strong> an</li>
</ol>
<p>Hinweis: Nutzen Sie Kleinbuchstaben und keine Leerzeichen für den Namen von Datenbanken, Tabellen und Spalten! Dies erleichtert den Umgang, da Sie dann keine Anführungszeichen (") nutzen müssen (bei Großschreibweise "FOSSGIS")</p>
<ol start="2">
<li>
<p>Verbinden Sie sich mit Ihrer Datenbank</p>
</li>
<li>
<p>Laden Sie die Erweiterung <strong><em>postgis</em></strong>.</p>
</li>
<li>
<p>Prüfen Sie, ob die PostGIS-Funktionen, die Tabelle <strong><em>spatial_ref_sys</em></strong> und die Metadaten-Sichten vorliegen</p>
</li>
</ol>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">DATABASE</span> <span class="pl-en">fossgis</span>;</pre></div>
<p>Wechseln zur Datenbank fossgis</p>
<div class="highlight highlight-source-sql"><pre>CREATE EXTENSION postgis;</pre></div>
<h3><a id="user-content-übung-3-datenbankhilfsprogramme-nutzung-von-createdb-zum-anlegen-einer-datenbank" class="anchor" aria-hidden="true" href="#übung-3-datenbankhilfsprogramme-nutzung-von-createdb-zum-anlegen-einer-datenbank"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 3: Datenbankhilfsprogramme. Nutzung von createdb zum Anlegen einer Datenbank</h3>
<ul>
<li>Prüfen Sie das PostGIS-Quickstart und finden Sie heraus, wie die Datenbank <strong><em>demo</em></strong> angelegt wurde</li>
<li><a href="https://live.osgeo.org/de/quickstart/postgis_quickstart.html" rel="nofollow">https://live.osgeo.org/de/quickstart/postgis_quickstart.html</a></li>
<li>PostgreSQL stellt diverse Hilfsprogramme bereit - wie createdb, dropdb, createuser, vacuumdb, pg_dump, pg_restore &amp; mehr. Der Aufruf erfolgt über die Kommandozeile</li>
</ul>
<div class="highlight highlight-source-sql"><pre>createdb <span class="pl-k">-</span>U user <span class="pl-k">-</span>e demo
createdb <span class="pl-c"><span class="pl-c">--</span>help</span>

psql <span class="pl-k">-</span>U user demo
CREATE EXTENSION postgis;
\q

dropdb <span class="pl-k">-</span>U user demo</pre></div>
<h3><a id="user-content-übung-4-erzeugen-und-befüllen-sie-die-tabelle-cities" class="anchor" aria-hidden="true" href="#übung-4-erzeugen-und-befüllen-sie-die-tabelle-cities"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 4: Erzeugen und befüllen Sie die Tabelle cities</h3>
<ul>
<li>Erzeugen Sie eine neuen Tabelle mit dem Namen <strong><em>cities</em></strong> mit den Spalten gid, name, country und geom (orientieren Sie sich dazu an dem Beispiel der Tabelle <strong><em>pois</em></strong>)</li>
<li>Fügen Sie einen Datensatz für Freiburg in die Tabelle mit Hilfe der Funktion ST_MakePoint ein (<a href="https://postgis.net/docs/ST_MakePoint.html" rel="nofollow">https://postgis.net/docs/ST_MakePoint.html</a>)</li>
<li>Sie finden die Koordinate für Freiburg unter <a href="https://www.latlong.net/place/" rel="nofollow">https://www.latlong.net/place/</a></li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">TABLE</span> <span class="pl-en">cities</span>(
 gid <span class="pl-k">serial</span> <span class="pl-k">PRIMARY KEY</span>,
 name <span class="pl-k">varchar</span>,
 country <span class="pl-k">varchar</span>,
 geom geometry(<span class="pl-k">point</span>,<span class="pl-c1">4326</span>)
);</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">INSERT INTO</span> cities(
            name, geom, country)
    <span class="pl-k">VALUES</span> (<span class="pl-s"><span class="pl-pds">'</span>Freiburg<span class="pl-pds">'</span></span>,ST_SetSrid(ST_MakePoint(<span class="pl-c1">7</span>.<span class="pl-c1">842104</span>, <span class="pl-c1">47</span>.<span class="pl-c1">999008</span>),<span class="pl-c1">4326</span>),<span class="pl-s"><span class="pl-pds">'</span>Germany<span class="pl-pds">'</span></span>);</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">INSERT INTO</span> cities(
            name, geom, country)
    <span class="pl-k">VALUES</span> (<span class="pl-s"><span class="pl-pds">'</span>Cologne<span class="pl-pds">'</span></span>,ST_SetSRID(ST_MakePoint(<span class="pl-c1">6</span>.<span class="pl-c1">958307</span> , <span class="pl-c1">50</span>.<span class="pl-c1">941357</span>),<span class="pl-c1">4326</span>),<span class="pl-s"><span class="pl-pds">'</span>Germany<span class="pl-pds">'</span></span>);</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">INSERT INTO</span> cities(
            name, geom, country)
    <span class="pl-k">VALUES</span> (<span class="pl-s"><span class="pl-pds">'</span>Calgary<span class="pl-pds">'</span></span>,ST_SetSRID(ST_MakePoint(<span class="pl-k">-</span><span class="pl-c1">114</span>.<span class="pl-c1">070847</span> , <span class="pl-c1">51</span>.<span class="pl-c1">048615</span>),<span class="pl-c1">4326</span>),<span class="pl-s"><span class="pl-pds">'</span>Canada<span class="pl-pds">'</span></span>);</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">INSERT INTO</span> cities(
            name, geom, country)
    <span class="pl-k">VALUES</span> (<span class="pl-s"><span class="pl-pds">'</span>Valmiera<span class="pl-pds">'</span></span>,ST_SetSRID(ST_MakePoint(<span class="pl-c1">25</span>.<span class="pl-c1">426361</span> , <span class="pl-c1">57</span>.<span class="pl-c1">538467</span>),<span class="pl-c1">4326</span>),<span class="pl-s"><span class="pl-pds">'</span>Latvia<span class="pl-pds">'</span></span>);</pre></div>
<h3><a id="user-content-well-known-text-format-wkt-und-well-known-binary-format-wkb" class="anchor" aria-hidden="true" href="#well-known-text-format-wkt-und-well-known-binary-format-wkb"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Well-Known Text Format (WKT) und Well-Known Binary Format (WKB)</h3>
<p>Die Geometrien werden intern im Well-Known Binary Format (WKB) gespeichert. Eine lesbare Ausgabe ist über das Well-Known Text Format (WKT) möglich.</p>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/postgis_wkt.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/postgis_wkt.png" alt="" style="max-width:100%;"></a></p>
<p><a href="http://postgis.net/docs/using_postgis_dbmanagement.html#OpenGISWKBWKT" rel="nofollow">http://postgis.net/docs/using_postgis_dbmanagement.html#OpenGISWKBWKT</a></p>
<p>ST_AsEWKT oder ST_AsText zur Anzeige der Geometrie als Text</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> ST_AsText(geom), geom <span class="pl-k">FROM</span> cities; <span class="pl-c"><span class="pl-c">--</span> mit SRID</span>
<span class="pl-k">SELECT</span> ST_AsEWKT(geom), geom <span class="pl-k">FROM</span> cities; <span class="pl-c"><span class="pl-c">--</span> ohne SRID</span></pre></div>
<h2><a id="user-content-qgis-zur-anzeige-der-daten" class="anchor" aria-hidden="true" href="#qgis-zur-anzeige-der-daten"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>QGIS zur Anzeige der Daten</h2>
<ul>
<li>Sie können Ihre Daten mit QGIS anzeigen, bearbeiten und Daten nach PostgreSQL importieren oder exportieren</li>
<li>Sie benötigen die Verbindungsparameter für den Zugriff auf die Datenbank - nur berechtigte Benutzer können sich mit den Daten verbinden</li>
</ul>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/qgis_db_connection.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/qgis_db_connection.png" alt="" style="max-width:100%;"></a></p>
<h3><a id="user-content-übung-5-qgis-anzeige-von-daten-aus-der-datenbank-natural_earth2-und-fossgis" class="anchor" aria-hidden="true" href="#übung-5-qgis-anzeige-von-daten-aus-der-datenbank-natural_earth2-und-fossgis"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 5: QGIS: Anzeige von Daten aus der Datenbank <strong><em>natural_earth2</em></strong> und fossgis</h3>
<ol>
<li>Öffnen Sie QGIS (<em>Geospatial -&gt; DesktopGIS -&gt; QGIS</em>) und erstellen Sie ein neues QGIS-Projekt
Laden Sie die Ländergrenzen, Bundesländer, städtische Bereiche (urban areas) und Ortschaften (populated places) aus der Datenbank <strong><em>natural_earth2</em></strong></li>
<li>Legen Sie eine neue PostGIS-Verbindung für Ihre neue Datenbank <strong><em>fossgis</em></strong> an</li>
<li>Laden Sie die neuen Tabelle <strong><em>cities</em></strong></li>
<li>Fügen Sie für Ihren Wohnort einen neuen Punkt in Ihre Tabelle <strong><em>cities</em></strong> ein. Nutzen Sie dazu das QGIS Digitalisierung</li>
</ol>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/qgis_cities.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/qgis_cities.png" alt="" style="max-width:100%;"></a></p>
<h2><a id="user-content-qgis-import-von-daten-nach-postgresql-über-die-qgis-db-verwaltung" class="anchor" aria-hidden="true" href="#qgis-import-von-daten-nach-postgresql-über-die-qgis-db-verwaltung"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>QGIS: Import von Daten nach PostgreSQL über die QGIS DB-Verwaltung</h2>
<p>Die QGIS DB-Verwaltung bietet eine komfortable Möglichkeit zum Import und Export von Daten. Sie finden die QGIS DB-Verwaltung im Menü unter <em>Databanken -&gt; DB-Verwaltung</em>. Sie benötigen einen Datenbankverbindung für den Zugriff auf die Daten.</p>
<p>Laden Sie die Daten, die Sie laden möchten, am Besten in ein QGIS-Projekt. Die Daten können auch gefiltert werden, so dass Sie auch nur einen Auszug der Daten in die Datenbank laden können.</p>
<p>Der Import erfolgt über die folgenden Schritte:</p>
<ol>
<li>Öffnen Sie die QGIS DB-Verwaltung</li>
<li>Verbinden Sie sich mit Ihrer Datenbank</li>
<li>Wählen Sie den <strong>Import</strong>-Button</li>
<li>Wählen Sie die Daten für den Import aus</li>
<li>Definieren Sie einen Namen für die Tabelle, den EPSG-Code und fügen Sie einen Primärschlüssel hinzu</li>
<li>Erzeugen Sie einen räumlichen Index</li>
<li>Starten Sie den Import</li>
<li>Fügen Sie die Daten nach dem Import per drag &amp; drop in Ihr QGIS-Projekt</li>
</ol>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/qgis_db_manager_import.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/qgis_db_manager_import.png" alt="" style="max-width:100%;"></a></p>
<h3><a id="user-content-übung-6-laden-von-natural_earth2-shapes-in-ihre-datenbank" class="anchor" aria-hidden="true" href="#übung-6-laden-von-natural_earth2-shapes-in-ihre-datenbank"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 6: Laden von natural_earth2-Shapes in Ihre Datenbank</h3>
<ul>
<li>Importieren Sie die Datei ne_10m_admin_0_countries.shp in die Tabelle <strong><em>ne_10m_admin_0_countries</em></strong></li>
<li>Importieren Sie die Datei ne_10m_admin_1_states_provinces_shp.shp in die Tabelle <strong><em>ne_10m_admin_1_states_provinces_shp</em></strong></li>
<li>Importieren Sie lediglich die Bundesländer von Deutschland in die Tabelle <strong><em>provinces_brd</em></strong> (nutzen Sie den Filter admin='Germany')</li>
<li>Importieren Sie die Shape-Datei ne_10m_populated_places.shp in die Tabelle <strong><em>ne_10m_populated_places</em></strong></li>
<li>Schauen Sie sich die Metadaten-Sicht <strong><em>geometry_columns</em></strong> an</li>
</ul>
<h2><a id="user-content-postgis-funktionen-in-aktion" class="anchor" aria-hidden="true" href="#postgis-funktionen-in-aktion"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>PostGIS-Funktionen in Aktion</h2>
<ul>
<li>PostGIS Dokumentation <a href="http://postgis.net/docs/" rel="nofollow">http://postgis.net/docs/</a></li>
<li>PostGIS Vector Functions see Chapter 8: <a href="http://postgis.net/docs/reference.html" rel="nofollow">http://postgis.net/docs/reference.html</a></li>
<li>PostGIS deutschsprachige Dokumentation <a href="http://www.postgis.net/docs/postgis-de.html" rel="nofollow">http://www.postgis.net/docs/postgis-de.html</a></li>
</ul>
<h3><a id="user-content-st_asewkt-oder-st_astext-zur-anzeige-der-geometrie-als-text" class="anchor" aria-hidden="true" href="#st_asewkt-oder-st_astext-zur-anzeige-der-geometrie-als-text"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>ST_AsEWKT oder ST_AsText zur Anzeige der Geometrie als Text</h3>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> ST_AsText(geom) <span class="pl-k">FROM</span> cities; <span class="pl-c"><span class="pl-c">--</span> mit SRID</span>
<span class="pl-k">SELECT</span> ST_AsEWKT(geom) <span class="pl-k">FROM</span> cities; <span class="pl-c"><span class="pl-c">--</span> ohne SRID</span>
<span class="pl-k">SELECT</span> ST_AsEWKT(geom) <span class="pl-k">FROM</span> provinces_brd;</pre></div>
<h3><a id="user-content-funktionen-zur-geometriegenerierung-geometry-constructors" class="anchor" aria-hidden="true" href="#funktionen-zur-geometriegenerierung-geometry-constructors"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Funktionen zur Geometriegenerierung (Geometry Constructors)</h3>
<ul>
<li>Es gibt zahlreiche Funktionen zum Erzeugen von Geometrien</li>
<li>siehe Geometry Constructors <a href="http://postgis.net/docs/reference.html#Geometry_Constructors" rel="nofollow">http://postgis.net/docs/reference.html#Geometry_Constructors</a></li>
<li>Wir nutzten ST_MakePoint bereits - diese Funktion unterstützt 2D, 3DZ oder 4D Geometrien <a href="http://postgis.net/docs/ST_MakePoint.html" rel="nofollow">http://postgis.net/docs/ST_MakePoint.html</a></li>
</ul>
<p>ST_GeomFromText - kann für unterschiedliche Geometrietypen verwendet werden</p>
<ul>
<li><a href="http://postgis.net/docs/ST_GeomFromText.html" rel="nofollow">http://postgis.net/docs/ST_GeomFromText.html</a></li>
<li><a href="http://postgis.net/docs/using_postgis_dbmanagement.html#OpenGISWKBWKT" rel="nofollow">http://postgis.net/docs/using_postgis_dbmanagement.html#OpenGISWKBWKT</a></li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">Update</span> cities 
 <span class="pl-k">set</span> geom <span class="pl-k">=</span> ST_GeomFromText(<span class="pl-s"><span class="pl-pds">'</span>POINT(6.958307 50.941357)<span class="pl-pds">'</span></span>,<span class="pl-c1">4326</span>) 
 <span class="pl-k">WHERE</span> name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Cologne<span class="pl-pds">'</span></span>;</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">Update</span> ne_10m_admin_0_countries 
<span class="pl-k">set</span> geom <span class="pl-k">=</span> ST_GeomFromText(<span class="pl-s"><span class="pl-pds">'</span>MULTIPOLYGON(((0 0,4 0,4 4,0 4,0 0),(1 1,2 1,2 2,1 2,1 1)), ((-1 -1,-1 -2,-2 -2,-2 -1,-1 -1)))<span class="pl-pds">'</span></span>,<span class="pl-c1">4326</span>) 
<span class="pl-k">WHERE</span> name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>United Kingdom<span class="pl-pds">'</span></span>;</pre></div>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/qgis_ST_GeomFromText.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/qgis_ST_GeomFromText.png" alt="" style="max-width:100%;"></a></p>
<h3><a id="user-content-räumliche-beziehungen-und-berechnungen" class="anchor" aria-hidden="true" href="#räumliche-beziehungen-und-berechnungen"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Räumliche Beziehungen und Berechnungen</h3>
<p>Ausgabe von Informationen über Ihre Daten wie z.B. Distanz, Fläche, Länge, Mittelpunkt.</p>
<h4><a id="user-content-übung-7-berechnen-sie-die-fläche-für-jedes-land" class="anchor" aria-hidden="true" href="#übung-7-berechnen-sie-die-fläche-für-jedes-land"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 7: Berechnen Sie die Fläche für jedes Land</h4>
<ul>
<li><a href="http://postgis.net/docs/ST_Area.html" rel="nofollow">http://postgis.net/docs/ST_Area.html</a></li>
<li>Achtung: Beachten Sie, dass zur Berechnung der Fläche die Einheit der verwendeten Projektion genutzt wird (Bei den Natural Earth II Daten ist dies EPSG 4326 also Grad) Verwenden Sie daher für die Berechnung den Spheroid, um sinnvolle Ergebnisse zu erhalten.</li>
</ul>
<p>Ohne Verwendung des Spheroids (Ausgabe in den Einheiten des EPSG-Codes)</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> gid, name, st_Area(geom)
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_admin_0_countries</span>;</pre></div>
<p>Berechnung mit Spheroid (Ergebnis in Quadratmetern)</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> gid, name, st_Area(geom, true) <span class="pl-k">as</span> flaeche
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_admin_0_countries</span>;</pre></div>
<p>Ausgabe von Deutschland, Österreich und Schweiz sortiert nach Größe</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> gid, name, st_Area(geom, true) <span class="pl-k">as</span> flaeche
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_admin_0_countries</span>
  <span class="pl-k">WHERE</span> name <span class="pl-k">IN</span> (<span class="pl-s"><span class="pl-pds">'</span>Germany<span class="pl-pds">'</span></span>,<span class="pl-s"><span class="pl-pds">'</span>Austria<span class="pl-pds">'</span></span>,<span class="pl-s"><span class="pl-pds">'</span>Switzerland<span class="pl-pds">'</span></span>) 
  <span class="pl-k">ORDER BY</span> flaeche <span class="pl-k">DESC</span>;</pre></div>
<h4><a id="user-content-übung-8-erzeugen-sie-eine-sicht-die-den-mittelpunkt-jedes-landes-ausgibt" class="anchor" aria-hidden="true" href="#übung-8-erzeugen-sie-eine-sicht-die-den-mittelpunkt-jedes-landes-ausgibt"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 8: Erzeugen Sie eine Sicht, die den Mittelpunkt jedes Landes ausgibt</h4>
<ul>
<li>Erzeugen Sie eine Sicht, die den Mittelpunkt jedes Landes ausgibt</li>
<li>Laden Sie die Daten in QGIS</li>
<li>Schauen Sie sich die Sicht geometry_columns an. Welcher Geometrietyp und welche Projektion werden angegeben?</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">VIEW</span> <span class="pl-en">qry_country_centroid</span> <span class="pl-k">AS</span>
<span class="pl-k">SELECT</span> gid, name, st_centroid(geom)
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_admin_0_countries</span>;</pre></div>
<p>Erzeugen Sie die Sicht erneut und weisen dabei der Geometrie den Typ POINT und den EPSG-Code 4326 zu (Stichwort typecast). Schauen Sie sich die Daten in QGIS an. Wo liegt der Mittelpunkt von Frankreich (France)?</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">Drop</span> <span class="pl-k">view</span> qry_country_centroid;
<span class="pl-k">CREATE</span> <span class="pl-k">VIEW</span> <span class="pl-en">qry_country_centroid</span> <span class="pl-k">AS</span>
<span class="pl-k">SELECT</span> gid, name, st_centroid(geom)::geometry(<span class="pl-k">point</span>,<span class="pl-c1">4326</span>) <span class="pl-k">as</span> geom
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_admin_0_countries</span>;</pre></div>
<p>Nutzen Sie die Funktion ST_PointOnSurface</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">VIEW</span> <span class="pl-en">qry_country_pointonsurface</span> <span class="pl-k">AS</span>
<span class="pl-k">SELECT</span> gid, name, st_pointonsurface(geom)::geometry(<span class="pl-k">point</span>,<span class="pl-c1">4326</span>) <span class="pl-k">as</span> geom
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_admin_0_countries</span>;</pre></div>
<h4><a id="user-content-übung-9-distanzberechnung" class="anchor" aria-hidden="true" href="#übung-9-distanzberechnung"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 9: Distanzberechnung</h4>
<ul>
<li>Gehen Sie zurück zur Tabelle <strong><em>cities</em></strong> aus Übung 4. Berechnen Sie die Entfernung von Ihrem Wohnort nach Freiburg.</li>
<li>Nutzen Sie dabei den Spheroid für die Berechnung (Nutzung des Typs <strong><em>geography</em></strong>)</li>
<li><a href="https://postgis.net/docs/ST_Distance.html" rel="nofollow">https://postgis.net/docs/ST_Distance.html</a></li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> <span class="pl-c1">g</span>.<span class="pl-c1">name</span>, <span class="pl-c1">myhome</span>.<span class="pl-c1">name</span>, ST_Distance(<span class="pl-c1">g</span>.<span class="pl-c1">geom</span>, <span class="pl-c1">myhome</span>.<span class="pl-c1">geom</span>, true) 
<span class="pl-k">FROM</span> cities g, 
cities myhome 
<span class="pl-k">WHERE</span> 
<span class="pl-c1">g</span>.<span class="pl-c1">name</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Freiburg<span class="pl-pds">'</span></span> 
<span class="pl-k">AND</span> <span class="pl-c1">myhome</span>.<span class="pl-c1">name</span><span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>Cologne<span class="pl-pds">'</span></span>;</pre></div>
<ul>
<li>Frage: Wer hatte die weiteste und wer die kürzeste Anreise?</li>
</ul>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/st_distance.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/st_distance.png" alt="" style="max-width:100%;"></a></p>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/qgis_great_circle.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/qgis_great_circle.png" alt="" style="max-width:100%;"></a></p>
<h3><a id="user-content-räumlicher-index-und-funktionaler-index" class="anchor" aria-hidden="true" href="#räumlicher-index-und-funktionaler-index"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Räumlicher Index und funktionaler Index</h3>
<ul>
<li>Ihre Geometriespalte sollte einen räumlichen Index aufweisen - dieser beschleunigt räumliche Abfragen</li>
<li>Der räumliche Index speichert zu jeder Geometrie die BoundingBox</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">INDEX</span> <span class="pl-en">gist_cities_geom</span>
 <span class="pl-k">ON</span> cities 
 USING GIST (geom);</pre></div>
<ul>
<li>Sie können auch einen funktionalen Index erzeugen z.B. mit ST_Transform</li>
</ul>
<p>ST_Transform transformiert die Daten in eine andere Projektion.</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">INDEX</span> <span class="pl-en">gist_cities_geom_25832</span>
 <span class="pl-k">ON</span> cities 
 USING GIST (ST_Transform(geom,<span class="pl-c1">25832</span>));</pre></div>
<h3><a id="user-content-geometrieprozessierung" class="anchor" aria-hidden="true" href="#geometrieprozessierung"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Geometrieprozessierung</h3>
<ul>
<li>Es gibt zahlreiche Funktionen zur Geometrieprozessierung z.B. Puffern, Verschneiden, Vereinigen, Teilen</li>
<li><a href="http://postgis.net/docs/reference.html#Geometry_Processing" rel="nofollow">http://postgis.net/docs/reference.html#Geometry_Processing</a></li>
</ul>
<h4><a id="user-content-übung-10-puffern-sie-die-tabelle-populated-places-mit-10-km" class="anchor" aria-hidden="true" href="#übung-10-puffern-sie-die-tabelle-populated-places-mit-10-km"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 10: Puffern Sie die Tabelle populated places mit 10 km</h4>
<ul>
<li>Puffern Sie die Tabelle <strong><em>ne_10m_populated_places</em></strong> mit 10 km</li>
<li><a href="http://postgis.net/docs/ST_Buffer.html" rel="nofollow">http://postgis.net/docs/ST_Buffer.html</a></li>
<li>Beachten Sie, dass Sie den Typ geography nutzen müssen, um einen Puffer in Metern zu erzeugen (nutzen Sie  typecast ::geography)</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">TABLE</span> <span class="pl-en">places_buffer_10_km</span> <span class="pl-k">as</span>
<span class="pl-k">SELECT</span> 
  gid, 
  name, 
  ST_Buffer(geom::geography, <span class="pl-c1">10000</span>)::geometry(<span class="pl-k">polygon</span>,<span class="pl-c1">4326</span>) <span class="pl-k">as</span> geom 
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_populated_places</span>;</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> a.<span class="pl-k">*</span> 
  <span class="pl-k">FROM</span> places_buffer_10_km a, places_buffer_10_km b
  <span class="pl-k">WHERE</span> <span class="pl-c1">a</span>.<span class="pl-c1">geom</span> &amp;&amp; <span class="pl-c1">b</span>.<span class="pl-c1">geom</span> 
  <span class="pl-k">AND</span> ST_Intersects(<span class="pl-c1">a</span>.<span class="pl-c1">geom</span>, <span class="pl-c1">b</span>.<span class="pl-c1">geom</span>) 
  <span class="pl-k">AND</span> <span class="pl-c1">a</span>.<span class="pl-c1">gid</span> <span class="pl-k">!=</span> <span class="pl-c1">b</span>.<span class="pl-c1">gid</span>;</pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">INDEX</span> <span class="pl-en">gist_places_buffer_10_km_geom</span>
  <span class="pl-k">ON</span> places_buffer_10_km 
  USING GIST (geom);</pre></div>
<p>Führen Sie die Abfrage erneut aus und prüfen Sie, ob der Index verwendet wird.</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> a.<span class="pl-k">*</span> 
  <span class="pl-k">FROM</span> places_buffer_10_km a, places_buffer_10_km b
  <span class="pl-k">WHERE</span>
  ST_Intersects(<span class="pl-c1">a</span>.<span class="pl-c1">geom</span>, <span class="pl-c1">b</span>.<span class="pl-c1">geom</span>) 
  <span class="pl-k">AND</span> <span class="pl-c1">a</span>.<span class="pl-c1">gid</span> <span class="pl-k">!=</span> <span class="pl-c1">b</span>.<span class="pl-c1">gid</span></pre></div>
<div class="highlight highlight-source-sql"><pre>EXPLAIN ANALYZE
<span class="pl-k">SELECT</span> a.<span class="pl-k">*</span> 
  <span class="pl-k">FROM</span> places_buffer_10_km a, places_buffer_10_km b
  <span class="pl-k">WHERE</span>
  ST_Intersects(<span class="pl-c1">a</span>.<span class="pl-c1">geom</span>, <span class="pl-c1">b</span>.<span class="pl-c1">geom</span>) 
  <span class="pl-k">AND</span> <span class="pl-c1">a</span>.<span class="pl-c1">gid</span> <span class="pl-k">!=</span> <span class="pl-c1">b</span>.<span class="pl-c1">gid</span></pre></div>
<h4><a id="user-content-übung-11-st_union---vereinigen-sie-alle-bundesländer-von-deutschland-zu-einer-fläche" class="anchor" aria-hidden="true" href="#übung-11-st_union---vereinigen-sie-alle-bundesländer-von-deutschland-zu-einer-fläche"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 11: ST_UNION - Vereinigen Sie alle Bundesländer von Deutschland zu einer Fläche</h4>
<ul>
<li>Erzeugen Sie eine Sicht <strong><em>qry_brd_union</em></strong></li>
<li>Nutzen Sie ST_UNION <a href="http://postgis.net/docs/ST_Union.html" rel="nofollow">http://postgis.net/docs/ST_Union.html</a></li>
<li>Nutzen Sie die Tabelle <strong><em>ne_10m_admin_1_states_provinces_shp</em></strong> und filtern Sie nach admin Germany (admin='Germany')</li>
<li>Fügen Sie die Spalte <strong><em>admin</em></strong> in Ihre Sicht ein - Sie müssen GROUP BY verwenden</li>
<li>Wenden Sie typecast auf die Geometriespalte an</li>
<li>Schauen Sie sich das Ergebnis in QGIS an</li>
</ul>
<p>Version 1: Vereinigung der Bundesländer von Germany über ST_UNION</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> ST_UNION(geom)
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_admin_1_states_provinces_shp</span> 
  <span class="pl-k">WHERE</span> admin<span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>Germany<span class="pl-pds">'</span></span>;</pre></div>
<p>Version 2: Ausgabe der Geometrie als Text</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> <span class="pl-c1">1</span> <span class="pl-k">as</span> gid, 
  admin, 
  st_AsText(ST_UNION(geom))
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_admin_1_states_provinces_shp</span> 
  <span class="pl-k">WHERE</span> admin<span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>Germany<span class="pl-pds">'</span></span>
  <span class="pl-k">GROUP BY</span> admin ;</pre></div>
<p>Version 3: Typcast, sinnvolle Benennung der Geometriespalte und zusätzliche Ausgabe der Spalte admin</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">VIEW</span> <span class="pl-en">qry_brd_union</span> <span class="pl-k">AS</span>
<span class="pl-k">SELECT</span> <span class="pl-c1">1</span> <span class="pl-k">as</span> gid, 
  admin, 
  ST_UNION(geom)::geometry(multipolygon,<span class="pl-c1">4326</span>) <span class="pl-k">as</span> geom
  <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_admin_1_states_provinces_shp</span> 
  <span class="pl-k">WHERE</span> admin<span class="pl-k">=</span><span class="pl-s"><span class="pl-pds">'</span>Germany<span class="pl-pds">'</span></span>
  <span class="pl-k">GROUP BY</span> admin ;</pre></div>
<h3><a id="user-content-st_subdivide" class="anchor" aria-hidden="true" href="#st_subdivide"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>ST_Subdivide</h3>
<ul>
<li>Unterteilt Multi-/Polygone in viele kleinere Polygone</li>
<li>Definition der maximalen Stützpunkte (Standardwert ist 256, kann nicht &lt; 8 sein). Die Polygone haben nicht mehr Stützpunkte als max_vertices</li>
<li><a href="http://postgis.net/docs/manual-2.4/ST_Subdivide.html" rel="nofollow">http://postgis.net/docs/manual-2.4/ST_Subdivide.html</a></li>
<li>Neu ab PostGIS 2.3.0</li>
</ul>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/provinces_st_subdivide.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/provinces_st_subdivide.png" alt="" style="max-width:100%;"></a></p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">TABLE</span> <span class="pl-en">provinces_subdivided</span> <span class="pl-k">AS</span> 
  <span class="pl-k">SELECT</span> 
  name, 
  admin, 
  st_subdivide(geom) <span class="pl-k">AS</span> geom
  <span class="pl-k">FROM</span> ne_10m_admin_1_states_provinces_shp;

<span class="pl-k">ALTER</span> <span class="pl-k">TABLE</span> provinces_subdivided ADD COLUMN gid <span class="pl-k">serial</span> <span class="pl-k">PRIMARY KEY</span>;</pre></div>
<ul>
<li>Mit Definition von max_vertices 20</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">DROP</span> <span class="pl-k">TABLE</span> provinces_subdivided;
<span class="pl-k">CREATE</span> <span class="pl-k">TABLE</span> <span class="pl-en">provinces_subdivided</span> <span class="pl-k">AS</span> 
  <span class="pl-k">SELECT</span> 
  name, 
  admin, 
  st_subdivide(geom,<span class="pl-c1">20</span>) <span class="pl-k">AS</span> geom
  <span class="pl-k">FROM</span> ne_10m_admin_1_states_provinces_shp ;

<span class="pl-k">ALTER</span> <span class="pl-k">TABLE</span> provinces_subdivided ADD COLUMN gid <span class="pl-k">serial</span> <span class="pl-k">PRIMARY KEY</span>;</pre></div>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/qgis_qry_provinces_subdivided_max_vertices.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/qgis_qry_provinces_subdivided_max_vertices.png" alt="" style="max-width:100%;"></a></p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE</span> <span class="pl-k">INDEX</span> <span class="pl-en">provinces_subdivided_the_geom_gist</span>
  <span class="pl-k">ON</span> provinces_subdivided
  USING gist
  (geom);

VACUUM ANALYZE provinces_subdivided;</pre></div>
<h4><a id="user-content-übung-12-st_subdivide" class="anchor" aria-hidden="true" href="#übung-12-st_subdivide"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 12: ST_Subdivide</h4>
<ul>
<li>Manchmal macht es Sinn, große Geometrien für Berechnungen in kleinere Flächen auszuteilen</li>
<li>Diese Übung soll dies mit Hilfe einer Funktion veranschaulichen</li>
<li>Erzeugen Sie eine neue Funktion <strong>getCountrynameSubdivided()</strong> für die Tabelle <strong><em>provinces_subdivided</em></strong></li>
<li>Schauen Sie sich EXPLAIN an, um die Performanz zu beurteilen</li>
</ul>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE OR REPLACE</span> <span class="pl-k">FUNCTION</span> <span class="pl-en">getCountrynameSubdivided</span>(mygeometry geometry) 
 RETURNS character varying 
 <span class="pl-k">AS</span> <span class="pl-s"><span class="pl-pds">'</span>SELECT c.name FROM provinces_subdivided c </span>
<span class="pl-s"> WHERE st_intersects(c.geom,$1);<span class="pl-pds">'</span></span> 
LANGUAGE <span class="pl-s"><span class="pl-pds">'</span>sql<span class="pl-pds">'</span></span>; </pre></div>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">SELECT</span> name, getCountrynameSubdivided(geom) 
 <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_populated_places</span> 
 <span class="pl-k">WHERE</span> adm0name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Germany<span class="pl-pds">'</span></span>;</pre></div>
<div class="highlight highlight-source-sql"><pre>EXPLAIN ANALYZE
<span class="pl-k">SELECT</span> name, getCountrynameSubdivided(geom) 
 <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_populated_places</span> 
 <span class="pl-k">WHERE</span> adm0name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Germany<span class="pl-pds">'</span></span>;</pre></div>
<p><a target="_blank" rel="noopener noreferrer" href="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/blob/master/img/getCountrynameSubdivided.png"><img src="/astroidex/fossgis-2020-workshop-postgresql-postgis-fuer-einsteiger-aemde/raw/master/img/getCountrynameSubdivided.png" alt="" style="max-width:100%;"></a></p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">ALTER</span> <span class="pl-k">TABLE</span> ne_10m_populated_places ADD COLUMN countryname <span class="pl-k">varchar</span>;

<span class="pl-k">UPDATE</span> ne_10m_populated_places 
<span class="pl-k">SET</span> countryname <span class="pl-k">=</span> getCountrynameSubdivided(geom);</pre></div>
<p>Funktion, die die Originaldaten (Provinzen) nutzt</p>
<div class="highlight highlight-source-sql"><pre><span class="pl-k">CREATE OR REPLACE</span> <span class="pl-k">FUNCTION</span> <span class="pl-en">getCountryname</span>(mygeometry geometry) 
 RETURNS character varying 
 <span class="pl-k">AS</span> <span class="pl-s"><span class="pl-pds">'</span>SELECT c.name FROM ne_10m_admin_1_states_provinces_shp c </span>
<span class="pl-s"> WHERE st_intersects(c.geom,$1);<span class="pl-pds">'</span></span> 
LANGUAGE <span class="pl-s"><span class="pl-pds">'</span>sql<span class="pl-pds">'</span></span>; </pre></div>
<div class="highlight highlight-source-sql"><pre>EXPLAIN ANALYZE
<span class="pl-k">SELECT</span> name, getCountryname(geom) 
 <span class="pl-k">FROM</span> <span class="pl-c1">public</span>.<span class="pl-c1">ne_10m_populated_places</span>;</pre></div>
<h2><a id="user-content-postgresql-rollen-und-zugriffskontrolle" class="anchor" aria-hidden="true" href="#postgresql-rollen-und-zugriffskontrolle"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>PostgreSQL Rollen und Zugriffskontrolle</h2>
<p>PostgreSQL unterstützt Rollen (Benutzer mit Login und Rollen ohne Login). Diese Rollen können unterschiedliche Berechtigungen haben und bekommen über GRANT den Zugriff auf die Objekte z.B. Tabellen, Sichten, Schema, Funktionen.</p>
<ul>
<li>Siehe CREATE ROLE: <a href="https://www.postgresql.org/docs/current/static/sql-createrole.html" rel="nofollow">https://www.postgresql.org/docs/current/static/sql-createrole.html</a></li>
<li>Siehe GRANT <a href="https://www.postgresql.org/docs/current/static/sql-grant.html" rel="nofollow">https://www.postgresql.org/docs/current/static/sql-grant.html</a></li>
</ul>
<h3><a id="user-content-übung-13-rollen-erzeugen-und-rechte-zuweisen" class="anchor" aria-hidden="true" href="#übung-13-rollen-erzeugen-und-rechte-zuweisen"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Übung 13: Rollen erzeugen und Rechte zuweisen</h3>
<ol>
<li>Legen Sie die Rollen <strong>workshop_read</strong> und <strong>workshop_writer</strong> an</li>
<li>Legen Sie die Login-Rolle <strong>robert</strong> mit Passwort an und fügen Sie diese zur Gruppe <strong>workshop_reader</strong> hinzu</li>
<li>Legen Sie die Login-Rolle <strong>wilma</strong> an und fügen Sie diese zur Gruppe <strong>workshop_writer</strong> hinzu</li>
<li>Geben Sie der Gruppe <strong>workshop_reader</strong> Leserechte auf die Tabelle <strong><em>ne_10m_admin_1_states_provinces_shp</em></strong></li>
<li>Geben Sie der Gruppe <strong>workshop_writer</strong> Schreibrechte auf die Tabelle <strong><em>cities</em></strong></li>
<li>Testen Sie den lesenden und schreibenden Zugriff über QGIS</li>
</ol>
<div class="highlight highlight-source-sql"><pre>CREATE ROLE workshop_reader;
CREATE ROLE workshop_writer;

CREATE ROLE robert WITH LOGIN PASSWORD <span class="pl-s"><span class="pl-pds">'</span>fossgis<span class="pl-pds">'</span></span>;
<span class="pl-k">GRANT</span> workshop_reader TO robert;

CREATE ROLE wilma WITH LOGIN PASSWORD <span class="pl-s"><span class="pl-pds">'</span>fossgis<span class="pl-pds">'</span></span>;
<span class="pl-k">GRANT</span> workshop_writer TO wilma;

<span class="pl-k">GRANT</span> <span class="pl-k">SELECT</span> <span class="pl-k">ON</span> ne_10m_admin_1_states_provinces_shp TO workshop_reader;
<span class="pl-c"><span class="pl-c">--</span> Wechseln Sie in die Rolle robert</span>
<span class="pl-k">Select</span> <span class="pl-k">*</span> <span class="pl-k">from</span> ne_10m_admin_1_states_provinces_shp;

<span class="pl-k">GRANT</span> ALL <span class="pl-k">ON</span> cities to workshop_writer;
<span class="pl-k">GRANT</span> USAGE <span class="pl-k">ON</span> SEQUENCE cities_gid_seq TO workshop_writer;

<span class="pl-c"><span class="pl-c">--</span> Wechseln Sie in die Rolle wilma im pgAdmin</span>
<span class="pl-c"><span class="pl-c">--</span> Führen Sie das folgende SQL aus</span>
<span class="pl-k">SELECT</span> <span class="pl-k">*</span> <span class="pl-k">from</span> cities;
<span class="pl-k">UPDATE</span> cities <span class="pl-k">SET</span> name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>TEST<span class="pl-pds">'</span></span> <span class="pl-k">WHERE</span> name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Bonn<span class="pl-pds">'</span></span>;
<span class="pl-k">SELECT</span> <span class="pl-k">*</span> <span class="pl-k">from</span> cities <span class="pl-k">where</span> name <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>TEST<span class="pl-pds">'</span></span>;</pre></div>
</article>
  </div>

    </div>

  

  <details class="details-reset details-overlay details-overlay-dark">
    <summary data-hotkey="l" aria-label="Jump to line"></summary>
    <details-dialog class="Box Box--overlay d-flex flex-column anim-fade-in fast linejump" aria-label="Jump to line">
      <!-- '"` --><!-- </textarea></xmp> --></option></form><form class="js-jump-to-line-form Box-body d-flex" action="" accept-charset="UTF-8" method="get">
        <input class="form-control flex-auto mr-3 linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
        <button type="submit" class="btn" data-close-dialog>Go</button>
</form>    </details-dialog>
  </details>



  </div>
</div>

    </main>
  </div>
  

  </div>

        
<div class="footer container-lg width-full p-responsive" role="contentinfo">
  <div class="position-relative d-flex flex-row-reverse flex-lg-row flex-wrap flex-lg-nowrap flex-justify-center flex-lg-justify-between pt-6 pb-2 mt-6 f6 text-gray border-top border-gray-light ">
    <ul class="list-style-none d-flex flex-wrap col-12 col-lg-5 flex-justify-center flex-lg-justify-between mb-2 mb-lg-0">
      <li class="mr-3 mr-lg-0">&copy; 2020 GitHub, Inc.</li>
        <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to terms, text:terms" href="https://github.com/site/terms">Terms</a></li>
        <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to privacy, text:privacy" href="https://github.com/site/privacy">Privacy</a></li>
        <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to security, text:security" href="https://github.com/security">Security</a></li>
        <li class="mr-3 mr-lg-0"><a href="https://githubstatus.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a data-ga-click="Footer, go to help, text:help" href="https://help.github.com">Help</a></li>

    </ul>

    <a aria-label="Homepage" title="GitHub" class="footer-octicon d-none d-lg-block mx-lg-4" href="https://github.com">
      <svg height="24" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
</a>
   <ul class="list-style-none d-flex flex-wrap col-12 col-lg-5 flex-justify-center flex-lg-justify-between mb-2 mb-lg-0">
        <li class="mr-3 mr-lg-0"><a data-ga-click="Footer, go to contact, text:contact" href="https://github.com/contact">Contact GitHub</a></li>
        <li class="mr-3 mr-lg-0"><a href="https://github.com/pricing" data-ga-click="Footer, go to Pricing, text:Pricing">Pricing</a></li>
      <li class="mr-3 mr-lg-0"><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li class="mr-3 mr-lg-0"><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
        <li class="mr-3 mr-lg-0"><a href="https://github.blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a data-ga-click="Footer, go to about, text:about" href="https://github.com/about">About</a></li>
    </ul>
  </div>
  <div class="d-flex flex-justify-center pb-6">
    <span class="f6 text-gray-light"></span>
  </div>
</div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 000 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 00.01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"/></svg>
    <button type="button" class="flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
    </button>
    You can’t perform that action at this time.
  </div>


    <script crossorigin="anonymous" async="async" integrity="sha512-o4vS4IKrjdy/HD+xr2+VhO6DxQmj5jikhHbEGrd8+JGhpmIOxRrpT1Qo5k3IhKimm8VXIu3pyYejLtOAkm+OsQ==" type="application/javascript" id="js-conditional-compat" data-src="https://github.githubassets.com/assets/compat-bootstrap-a38bd2e0.js"></script>
    <script crossorigin="anonymous" integrity="sha512-6XqOrpzsRfeWz1MuH9q2GuzW4Ktvt+kA5KbChOp1ZjaoGbRl3tBng8HiA5B/lClMvkkj4h+vVuSwLeh14JzGuA==" type="application/javascript" src="https://github.githubassets.com/assets/environment-bootstrap-e97a8eae.js"></script>
    <script crossorigin="anonymous" async="async" integrity="sha512-1/6VVx6z9r6uphSoGlmYgbqD5KaY+GVMt1Gqa3DIa0U+3Pv2SWu8Fk1BZ2xPne5upvF8HdEWcGeiUjd2URl+oA==" type="application/javascript" src="https://github.githubassets.com/assets/vendor-d7fe9557.js"></script>
    <script crossorigin="anonymous" async="async" integrity="sha512-RDggGUYWJq0pjfr/60y4ITVdK0zFDicDs0h46xLtUfsgDq6L6OWInB0F66615pE295U74v8ykPH/qsoL3U38ng==" type="application/javascript" src="https://github.githubassets.com/assets/frameworks-44382019.js"></script>
    
    <script crossorigin="anonymous" async="async" integrity="sha512-cvheqNMMD9OiFDiV1I4KZcg16H7Lh9KjAMhb6tocRyqKo7wAGOboPfEpPGhAEbaKK8teLMgOEAs/DeNlne06lw==" type="application/javascript" src="https://github.githubassets.com/assets/github-bootstrap-72f85ea8.js"></script>
    
    
    
  <div class="js-stale-session-flash flash flash-warn flash-banner" hidden
    >
    <svg class="octicon octicon-alert" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8.893 1.5c-.183-.31-.52-.5-.887-.5s-.703.19-.886.5L.138 13.499a.98.98 0 000 1.001c.193.31.53.501.886.501h13.964c.367 0 .704-.19.877-.5a1.03 1.03 0 00.01-1.002L8.893 1.5zm.133 11.497H6.987v-2.003h2.039v2.003zm0-3.004H6.987V5.987h2.039v4.006z"/></svg>
    <span class="js-stale-session-flash-signed-in" hidden>You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="js-stale-session-flash-signed-out" hidden>You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
  <template id="site-details-dialog">
  <details class="details-reset details-overlay details-overlay-dark lh-default text-gray-dark hx_rsm" open>
    <summary role="button" aria-label="Close dialog"></summary>
    <details-dialog class="Box Box--overlay d-flex flex-column anim-fade-in fast hx_rsm-dialog hx_rsm-modal">
      <button class="Box-btn-octicon m-0 btn-octicon position-absolute right-0 top-0" type="button" aria-label="Close dialog" data-close-dialog>
        <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg>
      </button>
      <div class="octocat-spinner my-6 js-details-dialog-spinner"></div>
    </details-dialog>
  </details>
</template>

  <div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
  <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
  </div>
</div>

  <div aria-live="polite" class="js-global-screen-reader-notice sr-only"></div>

  </body>
</html>

