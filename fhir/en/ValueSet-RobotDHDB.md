# Robot (DHDB) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Robot (DHDB)**

## ValueSet: Robot (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RobotDHDB | *Version*:2.27.0 |
| Active as of 2024-09-10 | *Computable Name*:RobotDHDB |

 
Robot assisteret metode (DHDB) 

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
  "id" : "RobotDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RobotDHDB",
  "version" : "2.27.0",
  "name" : "RobotDHDB",
  "title" : "Robot (DHDB)",
  "status" : "active",
  "date" : "2024-09-10T00:00:00+02:00",
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
  "description" : "Robot assisteret metode (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "etep",
        "display" : "ETEP"
      },
      {
        "code" : "tarup",
        "display" : "TARUP"
      },
      {
        "code" : "tapp",
        "display" : "TAPP"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
