</div><!-- .content -->

<footer id="colophon" class="footer text-background bg-foreground py-large text-sm">
    <div class="contentBlock px-normal">
        <div class="social-media desktop:flex">
            <div class="twitter desktop:w-1/2">
                <h2 class="font-heading text-lg font-bold mb-small"><a href="https://twitter.com/lawcha_org" class="footerLink"><span class="icon-twitter"></span> Twitter</a></h2>
                <p><span>Follow us on Twitter</span> <a href="https://twitter.com/lawcha_org" class="footerLink">@LAWCHA_ORG</a></p>
                <h2 class="font-heading text-lg font-bold mt-normal mb-small"><a href="https://www.facebook.com/laborandworkingclasshistory" class="footerLink"><span class="icon-facebook"></span> Facebook</a></h2>
                <p><span>Follow us on</span> <a href="https://www.facebook.com/laborandworkingclasshistory" class="footerLink">Facebook page</a> to receive the latest updates. Don't forget to like us!</p>
            </div>
            <div class="footer-news-categories desktop:w-1/2 mt-large desktop:mt-0">
                <h2 class="font-heading text-lg font-bold mb-small"><span class="icon-folder"></span> News Categories</h2>
                <div style="columns: auto 12em"><?= wp_nav_menu(["menu" => "News Categories"]) ?></div>
            </div>
        </div>
        <div class="site-info mt-large desktop:text-center text-sx">
            <p>&copy 1998-Present LAWCHA. All Rights Reserved.</p>

            <p>Supported for the <strong>latest versions</strong> of:
                <a href="http://www.google.com/chrome/" class="footerLink"><span>Chrome</span></a>
                <a href="https://www.mozilla.org/en-US/firefox/new/" class="footerLink"><span>Firefox<span></span></a>
                <a href="https://www.microsoft.com/en-us/windows/microsoft-edge" class="footerLink"><span>Edge</span></a>
                <a href="http://www.opera.com/" class="footerLink"><span>Opera</span></a>
            </p>

            <p class="mt-large"><strong><a href="#top" class="footerLink">Return to Top</a></strong></p>
        </div>
    </div>
</footer>

<?php lawcha_wp_footer(); ?>

</body>
</html>
