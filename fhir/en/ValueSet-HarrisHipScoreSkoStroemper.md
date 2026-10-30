# Harris Hip Score - Sko og strømer - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score - Sko og strømer**

## ValueSet: Harris Hip Score - Sko og strømer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreSkoStroemper | *Version*:2.27.1 |
| Active as of 2022-11-15 | *Computable Name*:HarrisHipScoreSkoStroemper |

 
Harris Hip Score - Sko og strømer 

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
  "id" : "HarrisHipScoreSkoStroemper",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreSkoStroemper",
  "version" : "2.27.1",
  "name" : "HarrisHipScoreSkoStroemper",
  "title" : "Harris Hip Score - Sko og strømer",
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
  "description" : "Harris Hip Score - Sko og strømer",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreShoesSocks",
      "concept" : [{
        "code" : "4",
        "display" : "Uden besvær"
      },
      {
        "code" : "2",
        "display" : "Med besvær"
      },
      {
        "code" : "0",
        "display" : "Kan ikke"
      }]
    }]
  }
}

```
