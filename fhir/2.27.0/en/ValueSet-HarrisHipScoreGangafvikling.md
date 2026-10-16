# Harris Hip Score - Gangafvikling - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score - Gangafvikling**

## ValueSet: Harris Hip Score - Gangafvikling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreGangafvikling | *Version*:2.27.0 |
| Active as of 2022-11-15 | *Computable Name*:HarrisHipScoreGangafvikling |

 
Harris Hip Score - Gangafvikling 

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
  "id" : "HarrisHipScoreGangafvikling",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreGangafvikling",
  "version" : "2.27.0",
  "name" : "HarrisHipScoreGangafvikling",
  "title" : "Harris Hip Score - Gangafvikling",
  "status" : "active",
  "date" : "2022-11-15T00:00:00+02:00",
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
  "description" : "Harris Hip Score - Gangafvikling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreLimp",
      "concept" : [{
        "code" : "11",
        "display" : "Ingen halten"
      },
      {
        "code" : "8",
        "display" : "Let halten"
      },
      {
        "code" : "5",
        "display" : "Tydelig halten"
      },
      {
        "code" : "0",
        "display" : "Udtalt halten"
      }]
    }]
  }
}

```
