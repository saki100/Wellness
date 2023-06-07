<div class="accordion" id="qcldopenaiaccordion">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseZero" aria-expanded="true" aria-controls="panelsStayOpen-collapseZero">
                <?php esc_html_e( 'Getting Started with OpenAI','openai_addon');?>
                </button>
            </h2>
        </div>
        <div id="panelsStayOpen-collapseZero" class=" collapse show" aria-labelledby="panelsStayOpen-headingZer">
        <div class="card-body">
        <p>
        <?php esc_html_e( 'Once you add the OpenAI API key, it should already start working for generic questions. Open a new browser window in Incognito mode and test by asking "What is the capital of Russia?"','openai_addon');?></p>
        <?php esc_html_e( '                Please make sure DialogFlow is Disabled if you want OpenAI to work','openai_addon');?></p>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    <?php esc_html_e( 'How to get an OpenAI API Key','openai_addon');?>
                </button>
            </h2>
        </div>
        <div id="panelsStayOpen-collapseOne" class=" collapse" aria-labelledby="panelsStayOpen-headingOne">
            <div class="card-body">
                <p><?php esc_html_e( 'The OpenAI API uses API keys for authentication. Visit your API Keys page to retrieve the API key you’ll use in your requests.Remember that your API key is a secret! Do not share it with others or expose it in any client-side code (browsers, apps). Production requests must be routed through your own backend server where your API key can be securely loaded from an environment variable or key management service.','openai_addon');?></p>
                
                <img class="img-responsive" src="<?php echo esc_url(QCLD_openai_addon_PLUGIN_URL.'image/api_screenshort.png'); ?>"/>
                
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0" id="panelsStayOpen-headingSeven">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseseven" aria-expanded="false" aria-controls="panelsStayOpen-collapseseven">
                    <?php esc_html_e( 'Training or Fine Tuning OpenAI','openai_addon');?>
                </button>
            </h2>
        </div>
        <div id="panelsStayOpen-collapseseven" class=" collapse" aria-labelledby="panelsStayOpen-headingSeven">
        <div class="card-body">
            
        <p><?php esc_html_e( 'To train OpenAI','openai_addon');?>
            <ul>
                <li><?php esc_html_e('a. To train or fine tune a model, 1st you need to:
                ','openai_addon'); ?>
                    <ol>
                        <li><?php esc_html_e('Gather the necessary data you want to train with','openai_addon'); ?></li>
                        <li><?php esc_html_e('Format the data correctly according to OpenAI API requirements (Download sample data format to see how it works). A dataset should have a at least 500 rows to offer useful results. According to the OpenAI documentation, numbers of 3,000 and 5,000 rows are recommended.','openai_addon'); ?></li>
                        <li><?php esc_html_e('Upload the data to OpenAI in .JSONL format','openai_addon'); ?></li>
                        <li><?php esc_html_e('Train an existing OpenAI model(select from the Bot OpenAI settings page) with your data','openai_addon'); ?></li>
                    </ol>
                </li>
                <li><?php esc_html_e('b. Once you have your JSONL file ready, please go to the Training model section.
                Upload your training file in .JSONL format.','openai_addon'); ?></li>
                <li><?php esc_html_e('c. Once you upload your training file, it will return a file id and the training will start once you click the Create FT Model button. Set a suffix (to recognize the model yourself later) and base model in the popup and create.','openai_addon'); ?></li>
                <li><?php esc_html_e('d. Once the training is done and the file is ready, it will return the fine tuned model. It will be listed under the Fine Tuned Models List, the status will be shown as "Succeeded" and you will also get a FT(Fine Tuned) Model ID (to copy to the settings page).','openai_addon'); ?></li>
                <li><?php esc_html_e('e. You can create multiple Fine Tuned models following the above procedure. Copy the Fine Tuned model ID you want to use.','openai_addon'); ?></li>
                <li><?php esc_html_e('f. Go to the main Bot OpenAI settings page and paste the Fine Tuned model ID to the Custom Fine Tuned Model field and save. Now the bot will start responding according to the Training data.','openai_addon'); ?></li>
            <ul>
        </p>
        
        <?php esc_html_e( 'Example:','openai_addon'); ?> </br>
        <code > <?php esc_html_e( '
        {"prompt": "puppy A is happy", "completion": "emotional state of puppy A"}','openai_addon'); ?></code></br>
        <code > <?php esc_html_e( '
        {"prompt": "puppy B is sad", "completion": "emotional state of puppy B"}','openai_addon'); ?></code></br>
        </br>
        <a href="https://wpbot.pro/myfile.jsonl" download><?php esc_html_e( 'Right click and Save the Example jsonl file','openai_addon');?></a>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0" id="panelsStayOpen-headingTwo">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <?php esc_html_e( 'Presence Penalty','openai_addon');?>
                </button>
            </h2>
        </div>
        <div id="panelsStayOpen-collapseTwo" class=" collapse" aria-labelledby="panelsStayOpen-headingTwo">
        <div class="card-body">
        <?php esc_html_e( 'Number between -2.0 and 2.0. Positive values penalize new tokens based on whether they appear in the text so far, increasing the model’s likelihood to talk about new topics.','openai_addon');?>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0" id="panelsStayOpen-headingThree">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <?php esc_html_e( 'Frequency Penalty','openai_addon');?>
                </button>
            </h2>
        </div>
        <div id="panelsStayOpen-collapseThree" class=" collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="card-body">
            <?php esc_html_e( ' Number between -2.0 and 2.0. Positive values penalize new tokens based on their existing frequency in the text so far, decreasing the model’s likelihood to repeat the same line verbatim.','openai_addon');?>
            
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0" id="panelsStayOpen-headingFour">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    <?php esc_html_e( 'Tempareture','openai_addon');?>
                </button>
            </h2>
        </div>
        <div id="panelsStayOpen-collapsefour" class=" collapse" aria-labelledby="panelsStayOpen-headingFour">
        <div class="card-body">
        <?php esc_html_e( ' One of the most important settings is called temperature.When the temperature is above 0, submitting the same prompt results in different completions each time.Remember that the model predicts which text is most likely to follow the text preceding it. Temperature is a value between 0 and 1 that essentially lets you control how confident the model should be when making these predictions. Lowering temperature means it will take fewer risks, and completions will be more accurate and deterministic. Increasing temperature will result in more diverse completions.','openai_addon');?>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0" id="panelsStayOpen-headingSix">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapsesix" aria-expanded="false" aria-controls="panelsStayOpen-collapsesix">
                    <?php esc_html_e( 'My OpenAI does not work','openai_addon');?>
                </button>
            </h2>
        </div>
        <div id="panelsStayOpen-collapsesix" class=" collapse" aria-labelledby="panelsStayOpen-headingSix">
        <div class="card-body">
        <?php esc_html_e( ' Please check your settings( i.e: Api keys, Max token etc.). Depending on the model (GPT3 was maximum 4000 other is 1,951 ) used, requests can use up to 4097 tokens shared between prompt and completion. If your prompt is 4000 tokens, your completion can be 97 tokens at most. Also check the dialogflow is inactive. Dialogflow and OpenAI does not work together.','openai_addon');?>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0" id="panelsStayOpen-headingEight">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                    <?php esc_html_e( 'Fine Tune with Website Data','openai_addon');?>
                </button>
            </h2>
        </div>
        <div id="panelsStayOpen-collapseEight" class=" collapse" aria-labelledby="panelsStayOpen-headingEight">
        <div class="card-body">
        <?php esc_html_e( 'You can create multiple Fine Tuned models based on your post types and pages. You can download your training data as a JSONL file to modify and then upload it in the same process as other file (see above for instructions). Also, you can upload it by clicking the `Upload As FT Model` button. Then you can create a Fine Tuned model from the Training Model tab.','openai_addon');?>
        </div>
        </div>
    </div>
</div>





