# Hunt-Hess score - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hunt-Hess score**

## ValueSet: Hunt-Hess score 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HuntHessClassification | *Version*:2.27.2 |
| Active as of 2022-06-28 | *Computable Name*:HuntHessClassification |

 
Hunt-Hess score ud fra klassifikationen. 

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
  "id" : "HuntHessClassification",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HuntHessClassification",
  "version" : "2.27.2",
  "name" : "HuntHessClassification",
  "title" : "Hunt-Hess score",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Hunt-Hess score ud fra klassifikationen.",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HuntHessClassification",
      "concept" : [{
        "code" : "grade_1",
        "display" : "1: Assymptomatisk eller hovedpine med let nakke-rygstivhed"
      },
      {
        "code" : "grade_2",
        "display" : "2: Moderat til svær hovedpine, nakke-rygstivhed evt. med kranienerveudfald."
      },
      {
        "code" : "grade_3",
        "display" : "3: Milde fokale udfald eller tydelig desorientering"
      },
      {
        "code" : "grade_4",
        "display" : "4: Stupor, moderat til svær hemiparese, tidlig decerebrerings rigiditet"
      },
      {
        "code" : "grade_5",
        "display" : "5: Dyb coma, decerebrerings rigiditet, moribund"
      }]
    }]
  }
}

```
