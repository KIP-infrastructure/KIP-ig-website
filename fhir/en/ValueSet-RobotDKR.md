# Robot (DKR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Robot (DKR)**

## ValueSet: Robot (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RobotDKR | *Version*:2.27.2 |
| Active as of 2024-12-02 | *Computable Name*:RobotDKR |

 
Robottyper til robot assisteret kirurgi (DKR) 

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
  "id" : "RobotDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RobotDKR",
  "version" : "2.27.2",
  "name" : "RobotDKR",
  "title" : "Robot (DKR)",
  "status" : "active",
  "date" : "2024-12-02T00:00:00+02:00",
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
  "description" : "Robottyper til robot assisteret kirurgi (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RobotAssistDKR",
      "concept" : [{
        "code" : "mako",
        "display" : "Mako"
      },
      {
        "code" : "rosa",
        "display" : "Rosa"
      },
      {
        "code" : "velys",
        "display" : "Velys"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
