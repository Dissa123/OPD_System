<!--  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Document</title>
</head>

<body>
    <div class="grid grid-cols-3 p-20 text-4xl">
        <div class="flex flex-col gap-4 justify-center items-center rounded border-2 hover:bg-blue-400 hover:text-white">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACNUlEQVR4nO3cz4sPcRzH8WfIj1xIcaCc1HJQkpzk5CjyDyi3zcXNTQ4uzkq5OLj4B1zkD6C4uTiQ5GKFWgeEjCbzbacxsX2n/X5ezTwf9bnszs68m8939tt+e7YgSZIkSZKmaVfpAbTmKLAKXPWmlLcbeAlUzboH7Cg91FRtAh60NmO2zpYebKqu92zGrdJDTdUZ4GdnMx4DW0sPNkUHgQ+dzXgH7C892BRtB551NuMHcLr0YFN1t+d940rpoaZquWcz7pceaoy2rOOYk8C3zmY8B3bOec1qpGuw+nf/C2DpH8fsBd52LvwZODzgutVI1yBHgE/NiT4Cp3qO2Qw87Fz0F3Bh4LWrka651a/6N52TfQHOd4672XPRGwxXjXTNrX7l3+45Yf3H3uXmmHPN09D+/qPmZ7VBrvXc9Hrdad4n2l97DezZqEG05iLw/T+P4lfguDdtsZ9NdZ+I9rq0wFnUOAGs9GxG/V6jQg4Br1qb8QTYVmoY/bEPeAq8Bw54UzLUH4kcKz2EJEmSlMW2N4htbxDb3iC2vWFse4PY9gax7Q1i2xvGtjeIbe+C2PZSPpSbse0lo1ys2faSk5La9mLbq3Ww7Q1k2xvItjeQbW8g295Atr2BbHslSZKkv9j2BrHtDWLbG8S2N4xtbxDb3iC2vUFse8PY9gax7V0Q217Kl4sztr1kpKQ1215se2eqka65+X97Q9n2BrLtDWTbG8i2N5BtbyDb3kC2vZIkSZIkSRLT9Ruj5fDiSVnmSwAAAABJRU5ErkJggg==">
            <a href="http://localhost:8080/pdo/pages/Patient_All_Apiments.php">Today Appointments</a>
        </div>
        <div class="flex flex-col gap-4 justify-center items-center rounded border-2 p-20 hover:bg-blue-400 hover:text-white">
            <img src="https://img.icons8.com/pulsar-line/144/null/experimental-folder-invoices-pulsar-line--v2.png" />

            <a href="http://localhost:8080/pdo/pages/Appointment.php">All Appointments</a>
        </div>
        <div class="flex flex-col gap-4 justify-center items-center rounded border-2 p-20 hover:bg-blue-400 hover:text-white">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFHElEQVR4nO2cTYgeNRjH/67strJr60Hx+wNBELG1Cup68qAXD7Zou6IinpQiW5B6ESqCl1bwYG3Fg+BJF8WL0KKIB/GmFaoIgtU9KBXZXT9A7JZarRoJZGB4yPu+yWSSPJM8PwgsmSQzk9/M5PNdQOiLhwD8DuAUgIXeShU6swZAmbDSvRihLxQJQmZECDNECDNESAduA3CUNMCxguAg40wCESLEkaMJZcgb4sDPIoQXKvITLG+IJyKEGUreEF4oEcILJUJ4oWoQMg1gF4AlACcAnAawbv5eMsd0Gg6o0oXsALDs0LdfNmlzo0oVMgXgRc9B1n8ADpi8uVClDgx9ZbSDlpILVaKQHeZpb5/4TwAHAdwBYNYE/fcr5hh9U7YjD6o0IdOWNuMkgJvH5NkC4EeSZzlTQ69KE7LL8maMk9GWcpbk1WWlRkWusORClsgJ9WfKlUMk71tIjypNyLfkhLd75L2T5NVlpUaNqDC9n2rVhIWA+ORCTpETznnkvZDk1WWlRo2osNVW3GpAvAiJIGQlID77J0t3bV2ZZ/zJWjCVvEI+Qb7x2Rt1Pc5w5bA06mm6vbpLO4lbpNubdmA4TspWxgPDwfeyRk2dnDXjjHnT85ozfx+2DAg5TZ0MvpfVcMBy8iFOLg6+l9UwZSqWvilDm35n38uaAbAHwDGz8qfDZwAWzTHKdo8FqlyfKSR8gnst/woAX46p1C8AXO6whLtuwjdmvkqWcDswM0FGE44zWh8vupe1x6MteArDRQ2ll3WMFPQ+gCsBXAXgA3LsU0v+6Vbb8wdJf840fp8A2Gc+jblQQ+llrZOCtIiGqyfM0l4G4CuPN+wvM2bRy7ypUUPpZU0qaNTxGU8Z7aA7ANcgLWoovayuQp7pKKMJPwC4JOTCPSleyNck/kPLU3++iXvCdIWVJU8q1gIfIJ+gz5VUyEYA/4xpe2xsAPCGpbz7UN5P2o6kFnKBJV5LmsSUeSva+T5CWT/6PAPg1hyfLDqtrmd4XbiRzIP9DeAipJNyJNLna82UHSQjRMi7JP5pj3MeJ3k5zHWxoauQvST+bY9zvkzyvtTDfaB2IXeR+O89zvkAyatH+UKgkA2WFcFLHWv1YtKOnPPc51U0XYXY5sF82gI6Lrkn8D6KIUTIQXJsv8d5Xyd5Xwi8j2IIEfIwOfaxx3kfi9D1VIxD+7eXO8etLYUIuc4yG6ynS1y4lkElqYxh5NJ2iBC6PqAcN881nGRQMSpjsG7+CBXyHjn+ZMD2VFVp2N+nkGfJcT2B6Mpuh/JLYdb8TmbUBsL7+xJyNzmup+VduakiIW22AfiJ3Pd3TUMfKmTWDOya4/8C2AQ3zqtUSCOFvik7+xACs2+r6yCvViGaV8m9v9mXkNdImufgTs1C5sm9n+hLyOMkjV6dc6VmIXO2XT19CLmBpPnF46JqFmK9/z6E6Mb5V5Lu+hFpu5RfMlGEwOx4bKd7tOsFVUY0Ic+TdIe6XlBlRBNyL0n3edcLqoxoQjaZQWF7H+/mLhdUGdGEwPziqp12scsFVUZUIYsk7W9m3cPrgiojqpDNZps+3Y2yzeeCKiOqEM2Dljx68vEdAI+Y/5HSnnwUIQgTIgFR60CEgNdDJkKQX4IIwYCFCHERIcwQIcwQIcwQIcwQIcwQIcwQIcwQIcwQIcyQqRNknhoRIcg+PyVCkL/iRQgqFSL4IUKYIUKYIUKYIUKYIUJKE+LbbRPG412/IiQuIoQZIgS88BLyPz8mAal0MLS4AAAAAElFTkSuQmCC">

            <a href="http://localhost:8080/pdo/pages/Patient_All_Apiments.php">Patients Details</a>
        </div>
        <div class="flex flex-col gap-4 justify-center items-center rounded border-2 p-20 hover:bg-blue-400 hover:text-white">
            <img src="https://img.icons8.com/external-outline-lafs/64/null/external-doctors-medicine-outline-part-1-v2-outline-lafs.png" />

            <a href="http://localhost:8080/pdo/pages/Patient_All_Apiments.php">Apoiments</a>
        </div>
        <div class="flex flex-col gap-4 justify-center items-center rounded border-2 p-20 hover:bg-blue-400 hover:text-white">
            <img src="https://img.icons8.com/external-outline-lafs/64/null/external-doctors-medicine-outline-part-1-v2-outline-lafs.png" />

            <a href="">Doctors Details</a>
        </div>

        <div class="flex flex-col gap-4 justify-center items-center rounded border-2 p-20 hover:bg-blue-400 hover:text-white">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAEkElEQVR4nO2cS48WRRSGH5lhAA0CYWNgZcRfYFAWYoSByCUmys0NoCGCIYIuMWHDUv8BsMCVAcJv4Oadq4AwAyoXgQEisCBDBli1qXA6GSZffd3VVf1VX86TnM1k+nTV+1Z31VddVaAoiqIoiqIoiqIoiqK0mUnAGuAAcA14AiQtjSeiwX5gtWhTKm8DFypQ8aSicR6YX5b4q1ve2pOcYTRaFVr8BSo+riaYt0UQ+oCLFWhZSc1iCOgPYcAnFahMUtNYF8KAQ5bkj4BNwCzayyzR4JFFo4MhbnLdkvzTEMkbwmcWjcwQ1ZunluQzQiRvCDMsGhntvLG935Qe6WRLvBOYHuIGNWe6aNFzA0w8BHa19HX0CvA1cC9DI2/yDLceiBGv0h7h7+bUxhuXce/9BhvxsqPwUQwYb8QOKXTdmQJsAe4U1MKbxCP+EyOmUT8GRPgRTw28SQKEqcR2YCrVZyrwlUeLzzLAGPud5H8MDAN7gSW2AtkSvwccdSzMbeBLeayrxhRgm5TRpU6HgXcdDPi2y/8eA96ceEFW4veB446FvglsldYQmwEpyy3HOhyVRpiS14CRHEP7hRRIPAj85FiJf+U9G8OIAeALKYNLmX8EFnXIF8qA1IR5rolTlgK/OFbKTPh9DkymfCYDm4EbjmX8WRqZjRCvoPFxxDXxRD4AfnOs5DWZ3g3yIaOD8JvkHi5l+lUaVRZ5dRoQE/I8CYM+BqQsB044Vvofme7ux59+mS6+6liG34FlDvcpotMcGaY/s1y7p2jiTqwETjmK8BewQT6LumKu2Qj87XjPk8CKAvfz0WmH5drhkAakLJFKur6atuR8IszanLXA5QJLSsx1LxWsl49Or1muHfVNnGXEaUeRrooRfV2EH3bMecFT+BRfnazXl2UAUulV0vpcRLskr5fZEhtlFYJLjnPARwGEr7UBKUaED4EzjiImBeKiGBZ6GWGtDZhoxB8lCH9JhC/SobfGgJRJYsS5AMIPlSx8Iw3w7ViTjA67DBppQEqf/B64kkN4M/xc30PhW2HA+D7CzL7ukw77vnyPNn3G9zJJFmpU40orDKgyakBk1IDIqAGRUQMiowZERg2IjBoQGTUgMmpAUw3QLUq92aJkNcC2Sc+sNFDCbdKzGpC1TXUm7WVmwG2qVgPW5ZgC1qCjBmtDGGDm1f9UkXFtZOcdv0l07cTf0cM6cBF/rMCxNZmjKLN8RI+rIZf4ZrlLKcPY+YE+lDc1zgJvFRA/twHph3LzNPwgi2jHKlDxJFKMiQZGi4891xrlNkApBzUgMmpAZNSAyKgBkVEDmmrA+J3hI7JBrQr7g1tjQKdtmeZvSo8M6HTmgjnyRemRAdq55EMNaKoBo5bEZpOy8py5Fo3MlzZvbPt1zeZk5TnfdNle5c1eS/JnYkKbn4Q5GUcV7CbQhuzY08ZJTWMxgThcgcokNQtzIFQwXpf9XLErldQkXjiwKRQLJXHsyiUVjwdyBl0pzJOToGJXMqlomFf1G/SAQTmMaKjL74SkBTEqRyjsDtnhKoqiKIqiKIqiKIqiKNSS/wGB9kfTrzQTzgAAAABJRU5ErkJggg==" class="flex flex-col items-center">

            <a href="">Emails</a>
        </div>
    </div>