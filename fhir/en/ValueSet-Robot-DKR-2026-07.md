# Robot (DKR)-2026-07 - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Robot (DKR)-2026-07**

## ValueSet: Robot (DKR)-2026-07 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Robot-DKR-2026-07 | *Version*:2.27.3 |
| Active as of 2026-11-05 | *Computable Name*:RobotDKR202607 |

 
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
  "id" : "Robot-DKR-2026-07",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Robot-DKR-2026-07",
  "version" : "2.27.3",
  "name" : "RobotDKR202607",
  "title" : "Robot (DKR)-2026-07",
  "status" : "active",
  "date" : "2026-11-05T00:00:00+01:00",
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
      }]
    }]
  }
}

```
