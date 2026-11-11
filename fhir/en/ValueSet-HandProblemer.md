# Taget hånd om problemer - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Taget hånd om problemer**

## ValueSet: Taget hånd om problemer 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HandProblemer | *Version*:2.27.2 |
| Active as of 2026-06-24 | *Computable Name*:HaandProblemerVS |

 
Taget hånd om problemer, PRO-PAL-skema 1 

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
  "id" : "HandProblemer",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HandProblemer",
  "version" : "2.27.2",
  "name" : "HaandProblemerVS",
  "title" : "Taget hånd om problemer",
  "status" : "active",
  "date" : "2026-06-24T00:00:00+02:00",
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
  "description" : "Taget hånd om problemer, PRO-PAL-skema 1",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HaandProblemer",
      "concept" : [{
        "code" : "ingenProblemer"
      },
      {
        "code" : "haandProblemer"
      },
      {
        "code" : "delvistProblemer"
      },
      {
        "code" : "stortHaandProblemer"
      },
      {
        "code" : "ikkeHaandProblemer"
      }]
    }]
  }
}

```
