# NIHSS - 6. Motorisk funktion i ben - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NIHSS - 6. Motorisk funktion i ben**

## ValueSet: NIHSS - 6. Motorisk funktion i ben 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/NIHSS6FunktionBen | *Version*:2.27.0 |
| Active as of 2022-06-27 | *Computable Name*:NIHSS6FunktionBen |

 
The National Institute of Health Stroke Scale (NIHSS) - 6. Motorisk funktion i ben 

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
  "id" : "NIHSS6FunktionBen",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/NIHSS6FunktionBen",
  "version" : "2.27.0",
  "name" : "NIHSS6FunktionBen",
  "title" : "NIHSS - 6. Motorisk funktion i ben",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 6. Motorisk funktion i ben",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS6MotorLeg",
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
