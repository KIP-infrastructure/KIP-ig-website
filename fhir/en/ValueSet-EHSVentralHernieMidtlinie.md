# EHS ventral hernie - midtlinie - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EHS ventral hernie - midtlinie**

## ValueSet: EHS ventral hernie - midtlinie 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EHSVentralHernieMidtlinie | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:EHSVentralHernieMidtlinie |

 
EHS ventral hernie - midtlinie 

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
  "id" : "EHSVentralHernieMidtlinie",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EHSVentralHernieMidtlinie",
  "version" : "2.27.1",
  "name" : "EHSVentralHernieMidtlinie",
  "title" : "EHS ventral hernie - midtlinie",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "EHS ventral hernie - midtlinie",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EHSIncisionalHerniaClassification",
      "concept" : [{
        "code" : "m1",
        "display" : "M1 subxiphoidal"
      },
      {
        "code" : "m2",
        "display" : "M2 epigastrielt"
      },
      {
        "code" : "m3",
        "display" : "M3 umbilikalt"
      },
      {
        "code" : "m4",
        "display" : "M4 infraumbilikalt"
      },
      {
        "code" : "m5",
        "display" : "M5 suprapubisk"
      }]
    }]
  }
}

```
