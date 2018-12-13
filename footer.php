</div><!-- .content -->

<footer id="colophon" class="footer text-background bg-foreground py-large text-sm mt-large">
    <div class="contentBlock px-normal">
        <div class="social-media desktop:flex">
            <div class="twitter desktop:w-1/2">
                <h2 class="font-heading text-lg font-bold mb-small">
                    <a href="https://twitter.com/lawcha_org" class="footerLink">
                        <i class="fab fa-twitter"></i>
                        Twitter
                    </a>
                </h2>
                <p><span>Follow us on Twitter</span> <a href="https://twitter.com/lawcha_org" class="footerLink">@LAWCHA_ORG</a></p>
                <h2 class="font-heading text-lg font-bold mt-normal mb-small">
                    <a href="https://www.facebook.com/laborandworkingclasshistory" class="footerLink">
                        <i class="fab fa-facebook"></i>
                        Facebook
                    </a>
                </h2>
                <p><span>Follow us on</span> <a href="https://www.facebook.com/laborandworkingclasshistory" class="footerLink">Facebook page</a> to receive the latest updates. Don't forget to like us!</p>
            </div>
            <div class="footer-news-categories desktop:w-1/2 mt-large desktop:mt-0">
                <h2 class="font-heading text-lg font-bold mb-small">
                    <i class="fas fa-folder-open"></i>
                    News Categories
                </h2>
                <div style="columns: auto 12em"><?= wp_nav_menu(["menu" => "News Categories"]) ?></div>
            </div>
        </div>
        <div class="site-info mt-large desktop:text-center text-sx">
            <p>&copy 1998-Present LAWCHA. All Rights Reserved.</p>

            <p>Supported for the <strong>latest versions</strong> of:
                <a href="http://www.google.com/chrome/" class="footerLink">
                    <i class="fab fa-chrome"></i>
                    Chrome
                </a>
                <a href="https://www.mozilla.org/en-US/firefox/new/" class="footerLink">
                    <i class="fab fa-firefox"></i>
                    Firefox
                </a>
                <a href="https://www.microsoft.com/en-us/windows/microsoft-edge" class="footerLink">
                    <i class="fab fa-edge"></i>
                    Edge
                </a>
                <a href="http://www.opera.com/" class="footerLink">
                    <i class="fab fa-opera"></i>
                    Opera
                </a>
            </p>

            <p class="mt-large">
                <strong>
                    <a href="#top" class="footerLink">
                        <i class="fas fa-chevron-double-up"></i>
                        Return to Top
                    </a>
                </strong>
            </p>
        </div>
    </div>
</footer>

<?php lawcha_wp_footer(); ?>

</body>
</html>
