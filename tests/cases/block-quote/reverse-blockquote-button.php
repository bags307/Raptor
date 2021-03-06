<!doctype html>
<html>
<head>
    <script type="text/javascript" src="../../js/case.js"></script>
    <?php $uri = '../../../src/'; include __DIR__ . '/../../../src/include.php'; ?>
</head>
<body class="simple">
    <script type="text/javascript">
        rangy.init();
    </script>
    <div class="test-1">
        <h1>Reverse Block Quote Button 1: Word Group Selection</h1>
        <div class="test-input">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis
                </p>
                <blockquote>
                    <p>
                        {dui id erat pellentesque et rhoncus}
                    </p>
                </blockquote>
                <p> nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis
                </p><p>
                    {dui id erat pellentesque et rhoncus}
                </p><p>
                    nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-1', function(input) {
            var blockquoteButton = getLayoutElement(input).find('.raptor-ui-text-block-quote');
            blockquoteButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (blockquoteButton.is('.ui-state-highlight')){
                throw new Error('Button is active');
            }
        });
    </script>

    <div class="test-2">
        <h1>Reverse Block Quote Button 2: Single Word Selection</h1>
        <div class="test-input">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                </p>
                <blockquote>
                    <p>
                        {adipiscing}
                    </p>
                </blockquote>
                <p>
                    elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                </p><p>
                    {adipiscing}
                </p><p>
                    elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-2', function(input) {
            var blockquoteButton = getLayoutElement(input).find('.raptor-ui-text-block-quote');
            blockquoteButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (blockquoteButton.is('.ui-state-highlight')){
                throw new Error('Button is active');
            }
        });
    </script>

    <div class="test-3">
        <h1>Reverse Block Quote Button 3: Part Word Selection</h1>
        <div class="test-input">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pel
                </p>
                <blockquote>
                    <p>
                        {lentesqu}
                    </p>
                </blockquote>
                <p>
                    e et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pel
                </p><p>
                    {lentesqu}
                </p><p>
                    e et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-3', function(input) {
            var blockquoteButton = getLayoutElement(input).find('.raptor-ui-text-block-quote');
            blockquoteButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (blockquoteButton.is('.ui-state-highlight')){
                throw new Error('Button is active');
            }
        });
    </script>

     <div class="test-4">
        <h1>Reverse Block Quote Button 4: Multi-Paragraph Selection</h1>
        <div class="test-input">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui
                </p>
                <blockquote>
                    <p>
                        {id erat pellentesque et rhoncus nunc semper. Suspendisse
                        malesuada hendrerit velit nec tristique.
                    </p>
                    <p>
                        Aliquam gravida mauris at
                        ligula venenatis rhoncus. Suspendisse}
                    </p>
                </blockquote>
                <p> interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui
                </p><p>
                    {id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse}
                 </p><p>
                     interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-4', function(input) {
            var blockquoteButton = getLayoutElement(input).find('.raptor-ui-text-block-quote');
            blockquoteButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (blockquoteButton.is('.ui-state-highlight')){
                throw new Error('Button is active');
            }
        });
    </script>

    <div class="test-5">
        <h1>Reverse Block Quote Button 5: Paragraph Selection</h1>
        <div class="test-input">
            <div class="editable">
                <blockquote>
                    <p>
                        {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                        convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                        malesuada hendrerit velit nec tristique.
                    </p>
                    <p>
                        Aliquam gravida mauris at
                        ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                        pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                    </p>
                </blockquote>
            </div>
        </div>
        <div class="test-expected">
            <div class="editable">
                <p>
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-5', function(input) {
            var blockquoteButton = getLayoutElement(input).find('.raptor-ui-text-block-quote');
            blockquoteButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (blockquoteButton.is('.ui-state-highlight')){
                throw new Error('Button is active');
            }
        });
    </script>

    <div class="test-6">
        <h1>Reverse Block Quote Button 6: Empty Selection in Word</h1>
        <div class="test-input">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><blockquote>
                    <p>
                        Aliquam gravida mauris at
                        ligula venenatis rhoncus. Suspen{}disse interdum, nisi nec consectetur
                        pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                    </p>
                </blockquote>

            </div>
        </div>
        <div class="test-expected">
            <div class="editable">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    {Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-6', function(input) {
            var blockquoteButton = getLayoutElement(input).find('.raptor-ui-text-block-quote');
            blockquoteButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (blockquoteButton.is('.ui-state-highlight')){
                throw new Error('Button is active');
            }
        });
    </script>

    <div class="test-7">
        <h1>Reverse Block Quote Button 7: Empty Selection at the Beginning of a Word</h1>
        <div class="test-input">
            <div class="editable">
                 <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                        convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                        malesuada {}hendrerit velit nec tristique.
                    </p>
                 </blockquote>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editable">
                <p>
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.}
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-7', function(input) {
            var blockquoteButton = getLayoutElement(input).find('.raptor-ui-text-block-quote');
            blockquoteButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (blockquoteButton.is('.ui-state-highlight')){
                throw new Error('Button is active');
            }
        });
    </script>

    <div class="test-8">
        <h1>Block Quote Button 8: Text Selection With an image</h1>
        <div class="test-input">
            <div class="editable">
                <blockquote>
                    <p>
                        Lorem {ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                        convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                        malesuada hendrerit velit nec tristique.
                    </p>
                    <p><img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" />}</p>
                </blockquote>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>

            </div>
        </div>
        <div class="test-expected">
            <div class="editable">
                <p>
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p><img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" />}</p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-8', function(input) {
            var blockquoteButton = getLayoutElement(input).find('.raptor-ui-text-block-quote');
            blockquoteButton.trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());

            if (blockquoteButton.is('.ui-state-highlight')){
                throw new Error('Button is active');
            }
        });
    </script>
</body>
</html>
