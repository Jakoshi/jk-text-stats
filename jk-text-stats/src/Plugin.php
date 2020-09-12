<?php
/**
 * @author Joshua Kresse <jk@lichtblick-webmanufaktur.de>
 * @date 8.9.2020
 */

namespace  JK\TextStats;


          use DaveChild\TextStatistics\Pluralise;
          use DaveChild\TextStatistics\Text;
          use DaveChild\TextStatistics\TextStatistics;

class Plugin {


    public function __construct()
    {
        add_shortcode("jk-text-stats", [$this, 'jkTestStats']);
    }

    public function jkTestStats(){
        ob_start();
        $textToTest = preg_replace('/<img[^>]+./','',get_the_content());      ;
        $textStats =  new TextStatistics();
        $text = new Text();
     ?>

        <div class="text_stats_div">


            <div> <h4>fleschKincaidReadingEase</h4>
            <p> <?php echo $textStats->fleschKincaidReadingEase($textToTest); ?></p>
            </div>

            <div> <h4>fleschKincaidGradeLevel</h4>
                <p><?php echo $textStats->fleschKincaidGradeLevel($textToTest); ?> </p>
            </div>
             <div>
                 <h4>gunningFogScore</h4>
                 <p><?php echo $textStats->gunningFogScore($textToTest); ?>    </p>
            </div>

             <div>
                 <h4>colemanLiauIndex</h4>
                 <p><?php echo $textStats->colemanLiauIndex($textToTest); ?> </p>
            </div>

              <div>
                  <h4>smogIndex</h4>
                  <p><?php echo $textStats->smogIndex($textToTest); ?>    </p>
            </div>

             <div>
                 <h4>textLength</h4>
                 <p><?php echo $text->textLength($textToTest); ?></p>
            </div>

              <div>
                  <h4>automatedReadabilityIndex</h4>
                  <p><?php echo $textStats->automatedReadabilityIndex($textToTest); ?> </p>
            </div>

              <div>
                  <h4>letterCount</h4>
                  <p><?php echo $textStats->letterCount($textToTest); ?></p>
            </div>

              <div>
                  <h4>sentenceCount</h4>
                  <p> <?php echo $textStats->sentenceCount($textToTest); ?></p>
            </div>

              <div>
                  <h4>wordCount</h4>
                  <p><?php echo $textStats->wordCount($textToTest); ?></p>
            </div>

              <div>
                  <h4>averageWordsPerSentence</h4>
                  <p> <?php echo round($textStats->averageWordsPerSentence($textToTest), 2); ?></p>
            </div>

              <div>
                  <h4>totalSyllables</h4>
                  <p><?php echo $textStats->totalSyllables($textToTest); ?></p>
            </div>

              <div>
                  <h4>averageSyllablesPerWord</h4>
                  <p><?php echo round($textStats->averageSyllablesPerWord($textToTest), 2)  ; ?></p>
            </div>

              <div>
                  <h4>wordsWithThreeSyllables</h4>
                  <p> <?php echo round($textStats->wordsWithThreeSyllables($textToTest), 1); ?>      </p>
            </div>

              <div>
                  <h4>percentageWordsWithThreeSyllables</h4>
                  <p> <?php echo round( $textStats->percentageWordsWithThreeSyllables($textToTest), 1) . '%'; ?> </p>
            </div>


        </div>


        <style>
              .text_stats_div {
                  display: grid;
                  grid-template-columns: 50% 50%;
                  background-color: gray;
                  padding: 10px 20px;
                  color: white;
                  width: 80%;
                  max-width: unset !important;
              }

            .text_stats_div h4 {
                font-size: 16px;
                color: white;

            }
            .text_stats_div p {
                color: black;
            }
        </style>

    <?php
              $output = ob_get_clean();

              return $output;

    }
}
