# Observation af patienten - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation af patienten**

## ValueSet: Observation af patienten 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ObservationPatient | *Version*:2.27.3 |
| Active as of 2024-02-21 | *Computable Name*:ObservationPatient |

 
Observation af patienten indsamlet via 

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
  "id" : "ObservationPatient",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ObservationPatient",
  "version" : "2.27.3",
  "name" : "ObservationPatient",
  "title" : "Observation af patienten",
  "status" : "active",
  "date" : "2024-02-21T00:00:00+02:00",
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
  "description" : "Observation af patienten indsamlet via",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ContactPatient",
      "concept" : [{
        "code" : "spoergeskema",
        "display" : "Selvudfyldt spørgeskema"
      },
      {
        "code" : "interview",
        "display" : "Telefoninterview"
      },
      {
        "code" : "samtale",
        "display" : "Personlig samtale"
      }]
    }]
  }
}

```
