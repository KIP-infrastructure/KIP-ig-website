# Assist devices; Ballon og stent - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Assist devices; Ballon og stent**

## ValueSet: Assist devices; Ballon og stent 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AssistDevicesBallonStent | *Version*:2.27.3 |
| Active as of 2022-06-29 | *Computable Name*:AssistDevicesBallonStent |

 
Assist devices; Ballon og stent 

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
  "id" : "AssistDevicesBallonStent",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AssistDevicesBallonStent",
  "version" : "2.27.3",
  "name" : "AssistDevicesBallonStent",
  "title" : "Assist devices; Ballon og stent",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Assist devices; Ballon og stent",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AssistDevices",
      "concept" : [{
        "code" : "balloon",
        "display" : "Ballon"
      },
      {
        "code" : "stent",
        "display" : "Stent"
      }]
    }]
  }
}

```
