# Harris Hip Score - Siddefunktion - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score - Siddefunktion**

## ValueSet: Harris Hip Score - Siddefunktion 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreSiddefunktion | *Version*:2.27.0 |
| Active as of 2022-11-15 | *Computable Name*:HarrisHipScoreSiddefunktion |

 
Harris Hip Score - Siddefunktion 

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
  "id" : "HarrisHipScoreSiddefunktion",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreSiddefunktion",
  "version" : "2.27.0",
  "name" : "HarrisHipScoreSiddefunktion",
  "title" : "Harris Hip Score - Siddefunktion",
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
  "description" : "Harris Hip Score - Siddefunktion",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreSitting",
      "concept" : [{
        "code" : "5",
        "display" : "Bekvemt i lænestol"
      },
      {
        "code" : "3",
        "display" : "På høj stol i ca. 30 min."
      },
      {
        "code" : "0",
        "display" : "Sidder aldrig bekvemt"
      }]
    }]
  }
}

```
