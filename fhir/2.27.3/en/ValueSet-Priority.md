# Priority - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Priority**

## ValueSet: Priority 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Priority | *Version*:2.27.3 |
| Active as of 2022-05-31 | *Computable Name*:Priority |

 
Vurdering af patientens behov 

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
  "id" : "Priority",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Priority",
  "version" : "2.27.3",
  "name" : "Priority",
  "title" : "Priority",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Vurdering af patientens behov",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Priority",
      "concept" : [{
        "code" : "elective",
        "display" : "Elektiv"
      },
      {
        "code" : "hasten",
        "display" : "Fremskyndet (dage)"
      },
      {
        "code" : "urgent",
        "display" : "Hastende (timer)"
      },
      {
        "code" : "lethal",
        "display" : "Umiddelbart livstruende"
      }]
    }]
  }
}

```
