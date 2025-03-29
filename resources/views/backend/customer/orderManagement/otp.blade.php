
<div id="threedsChallengeRedirect" xmlns="http://www.w3.org/1999/html" style=" height: 100vh">
    <form id ="threedsChallengeRedirectForm" method="POST"
        action="https://mtf.gateway.mastercard.com/acs/mastercard/v2/prompt" > 
        @csrf
        <input type="hidden" name="creq" value="{{ $creqValue }}" />
            
    </form> 
    <script id="authenticate-payer-script">
        var e = document.getElementById("threedsChallengeRedirectForm");
        if (e) {
            e.submit();
            if (e.parentNode !== null) {
                e.parentNode.removeChild(e);
            }
        }
    </script>
</div>
