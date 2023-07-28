testing for angualrjs
For testing in angularjs we need to install karma and jasmine
```
npm install karma --save-dev
npm install karma-jasmine karma-chrome-launcher --save-dev
```
For testing we need to create a file called karma.conf.js
```
karma init
```
It will ask some questions
```
Which testing framework do you want to use ?
Press tab to list possible options. Enter to move to the next question.

> jasmine

Do you want to use Require.js ?
This will add Require.js plugin.
Press tab to list possible options. Enter to move to the next question.

> no
