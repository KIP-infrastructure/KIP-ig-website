# Glenoidalkomponent - ikke indsat (DSR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Glenoidalkomponent - ikke indsat (DSR)**

## ValueSet: Glenoidalkomponent - ikke indsat (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GlenoidalkomponentIkkeIndsatDSR | *Version*:2.27.1 |
| Active as of 2022-10-06 | *Computable Name*:GlenoidalkomponentIkkeIndsatDSR |

 
Glenoidalkomponent - ikke indsat (DSR) 

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
  "id" : "GlenoidalkomponentIkkeIndsatDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GlenoidalkomponentIkkeIndsatDSR",
  "version" : "2.27.1",
  "name" : "GlenoidalkomponentIkkeIndsatDSR",
  "title" : "Glenoidalkomponent - ikke indsat (DSR)",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Glenoidalkomponent - ikke indsat (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "cavitas_untouched",
        "display" : "Cavitas urørt"
      },
      {
        "code" : "cavitas_inforeret",
        "display" : "Cavitas inforeret"
      },
      {
        "code" : "cavitas_reamet",
        "display" : "Cavitas reamet"
      },
      {
        "code" : "cavitas_removed",
        "display" : "Glenoidal komponent fjernet"
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
