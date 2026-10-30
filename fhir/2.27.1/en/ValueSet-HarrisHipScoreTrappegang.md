# Harris Hip Score - Trappegang - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score - Trappegang**

## ValueSet: Harris Hip Score - Trappegang 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreTrappegang | *Version*:2.27.1 |
| Active as of 2022-11-15 | *Computable Name*:HarrisHipScoreTrappegang |

 
Harris Hip Score - Trappegang 

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
  "id" : "HarrisHipScoreTrappegang",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreTrappegang",
  "version" : "2.27.1",
  "name" : "HarrisHipScoreTrappegang",
  "title" : "Harris Hip Score - Trappegang",
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
  "description" : "Harris Hip Score - Trappegang",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScoreStairs",
      "concept" : [{
        "code" : "4",
        "display" : "Bruger ikke gelænderet"
      },
      {
        "code" : "2",
        "display" : "Bruger gelænderet"
      },
      {
        "code" : "1",
        "display" : "Yderst besværligt"
      },
      {
        "code" : "0",
        "display" : "Kan ikke"
      }]
    }]
  }
}

```
