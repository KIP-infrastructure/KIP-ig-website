# Central blokade score - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Central blokade score**

## ValueSet: Central blokade score 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ScoreCentralBlock | *Version*:2.27.2 |
| Active as of 2022-06-09 | *Computable Name*:ScoreCentralBlock |

 
Regional score ved central nerveblokade 

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
  "id" : "ScoreCentralBlock",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ScoreCentralBlock",
  "version" : "2.27.2",
  "name" : "ScoreCentralBlock",
  "title" : "Central blokade score",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Regional score ved central nerveblokade",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ScoreCentralBlock",
      "concept" : [{
        "code" : "attempt_LE3",
        "display" : "Forsøgt anlagt antal <=3 gange"
      },
      {
        "code" : "attempt_GT3",
        "display" : "Forsøgt anlagt >3 gange"
      },
      {
        "code" : "epidural_on_arr",
        "display" : "Ankommet med anlagt epidural kateter"
      },
      {
        "code" : "abandon",
        "display" : "Opgivet"
      }]
    }]
  }
}

```
