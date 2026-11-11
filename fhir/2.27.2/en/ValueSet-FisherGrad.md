# Fisher grad for SAH - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fisher grad for SAH**

## ValueSet: Fisher grad for SAH 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FisherGrad | *Version*:2.27.2 |
| Active as of 2022-06-28 | *Computable Name*:FisherGrad |

 
Fisher grad for SAH 

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
  "id" : "FisherGrad",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FisherGrad",
  "version" : "2.27.2",
  "name" : "FisherGrad",
  "title" : "Fisher grad for SAH",
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
  "description" : "Fisher grad for SAH",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/FisherGradingScale",
      "concept" : [{
        "code" : "grade1",
        "display" : "Intet synligt blod"
      },
      {
        "code" : "grade2",
        "display" : "SAH < 1 mm"
      },
      {
        "code" : "grade3",
        "display" : "SAH > 1 mm"
      },
      {
        "code" : "grade4",
        "display" : "SAH med IVH eller ICH"
      }]
    }]
  }
}

```
