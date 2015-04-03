# yii2-snackbarjs
Composer package for implementing FezVrasta's SnackbarJs in Yii2
https://github.com/FezVrasta/snackbarjs

## Installation

Either run
```
composer global require "romdim/yii2-snackbarjs:dev-master"
```

Or add

```
"romdim/yii2-snackbarjs": "dev-master",
```

to the require section of your composer.json file.

## Usage

After installation, just add

```
    public $depends = [
        'yii\web\YiiAsset',
		'romdim\snackbarjs\SnackbarJsAsset'
    ];
```

in your AppAsset