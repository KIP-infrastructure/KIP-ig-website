# Henvist fra - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Henvist fra**

## ValueSet: Henvist fra 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HenvistFra | *Version*:2.27.1 |
| Active as of 2022-09-06 | *Computable Name*:HenvistFra |

 
Hvor er patienten blevet henvist fra 

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
  "id" : "HenvistFra",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HenvistFra",
  "version" : "2.27.1",
  "name" : "HenvistFra",
  "title" : "Henvist fra",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "Hvor er patienten blevet henvist fra",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ReferredFrom",
      "concept" : [{
        "code" : "own_doctor",
        "display" : "Egen læge"
      },
      {
        "code" : "specialist_doctor",
        "display" : "Praktiserende speciallæge"
      },
      {
        "code" : "hospital_department",
        "display" : "Sygehusafdeling"
      },
      {
        "code" : "palliative_department",
        "display" : "Anden palliativ enhed"
      },
      {
        "code" : "patient_relavtives",
        "display" : "Patienten selv eller pårørende"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
