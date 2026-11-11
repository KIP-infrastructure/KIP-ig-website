# WFSN grad - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WFSN grad**

## ValueSet: WFSN grad 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/WFNSGradering | *Version*:2.27.2 |
| Active as of 2022-06-28 | *Computable Name*:WFNSGradering |

 
World Federation of Neurosurgical Societies (WFNS) grad. 

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
  "id" : "WFNSGradering",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/WFNSGradering",
  "version" : "2.27.2",
  "name" : "WFNSGradering",
  "title" : "WFSN grad",
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
  "description" : "World Federation of Neurosurgical Societies (WFNS) grad.",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/WFNSGradingSystem",
      "concept" : [{
        "code" : "grade1",
        "display" : "1: GCS 15 uden motoriske udfald"
      },
      {
        "code" : "grade2",
        "display" : "2: GCS 14-13 uden motoriske udfald"
      },
      {
        "code" : "grade3",
        "display" : "3: GCS 14-13 med motoriske udfald"
      },
      {
        "code" : "grade4",
        "display" : "4: GCS 12-7 med/uden motoriske udfald"
      },
      {
        "code" : "grade5",
        "display" : "5: GCS 6-3 med/uden motoriske udfald"
      }]
    }]
  }
}

```
