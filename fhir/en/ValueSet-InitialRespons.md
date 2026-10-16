# InitialRespons - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **InitialRespons**

## ValueSet: InitialRespons 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/InitialRespons | *Version*:2.27.0 |
| Active as of 2024-06-25 | *Computable Name*:InitialRespons |

 
InitialRespons 

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
  "id" : "InitialRespons",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/InitialRespons",
  "version" : "2.27.0",
  "name" : "InitialRespons",
  "title" : "InitialRespons",
  "status" : "active",
  "date" : "2024-06-25T00:00:00+02:00",
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
  "description" : "InitialRespons",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Profylaksebehandling",
      "concept" : [{
        "code" : "yesfreeOfTreatment",
        "display" : "Ja, og patienten genoptog ikke sin vanlige profylaksebehandling"
      },
      {
        "code" : "yesagainprofylakse",
        "display" : "Ja, men patienten har genoptaget profylaksebehandling"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "N",
        "display" : "Nej"
      }]
    }]
  }
}

```
