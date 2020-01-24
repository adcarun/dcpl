<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">

      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });

      function onLoad() {
        var options = {
          sourceLanguage: 'en', // or google.elements.transliteration.LanguageCode.ENGLISH,['ar'],  or
          destinationLanguage: [google.elements.transliteration.LanguageCode.HINDI],
          shortcutKey: 'ctrl+g',
          transliterationEnabled: true
        };
        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textfields with the given ids.
        var ids = [ "transl1", "transl2", "transl3", "transl4", "transl5", "transl6", "transl7", "transl8", "transl9", "trans20", "Email" ];
        control.makeTransliteratable(ids);

        // Show the transliteration control which can be used to toggle between
        // English and Hindi.
        control.showControl('translControl');
		//control.showControl('translControl1');
      }
      google.setOnLoadCallback(onLoad);
	</script>