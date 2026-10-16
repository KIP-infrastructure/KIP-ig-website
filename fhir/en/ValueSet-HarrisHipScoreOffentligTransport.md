# Harris Hip Score - Offentlig transport - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Harris Hip Score - Offentlig transport**

## ValueSet: Harris Hip Score - Offentlig transport 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreOffentligTransport | *Version*:2.27.0 |
| Active as of 2022-11-15 | *Computable Name*:HarrisHipScoreOffentligTransport |

 
Harris Hip Score - Offentlig transport 

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
  "id" : "HarrisHipScoreOffentligTransport",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HarrisHipScoreOffentligTransport",
  "version" : "2.27.0",
  "name" : "HarrisHipScoreOffentligTransport",
  "title" : "Harris Hip Score - Offentlig transport",
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
  "description" : "Harris Hip Score - Offentlig transport",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HarrisHipScorePublicTransportation",
      "concept" : [{
        "code" : "1",
        "display" : "Kan bruge dette"
      },
      {
        "code" : "0",
        "display" : "Kan ikke bruge dette"
      }]
    }]
  }
}

```
