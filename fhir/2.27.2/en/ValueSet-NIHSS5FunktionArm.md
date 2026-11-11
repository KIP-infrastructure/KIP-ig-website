# NIHSS - 5. Motorisk funktion i arm - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 5. Motorisk funktion i arm**

## ValueSet: NIHSS - 5. Motorisk funktion i arm 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS5FunktionArm | *Version*:2.27.2 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS5FunktionArm |

 
The National Institute of Health Stroke Scale (NIHSS) - 5. Motorisk funktion i arm 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "NIHSS5FunktionArm",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS5FunktionArm",
  "version" : "2.27.2",
  "name" : "NIHSS5FunktionArm",
  "title" : "NIHSS - 5. Motorisk funktion i arm",
  "status" : "active",
  "date" : "2022-06-27T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 5. Motorisk funktion i arm",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS5MotorArm",
      "concept" : [{
        "code" : "0",
        "display" : "0 = Ingen nedsynkning"
      },
      {
        "code" : "1",
        "display" : "1 = Nedsynkning, men ikke til underlag"
      },
      {
        "code" : "2",
        "display" : "2 = Nogen kraft mod tyngde"
      },
      {
        "code" : "3",
        "display" : "3 = Falder til underlag"
      },
      {
        "code" : "4",
        "display" : "4 = Ingen bevægelse"
      },
      {
        "code" : "UN",
        "display" : "5 = Kan ikke testes (amputation/stivgjort led/andet)"
      }]
    }]
  }
}

```
