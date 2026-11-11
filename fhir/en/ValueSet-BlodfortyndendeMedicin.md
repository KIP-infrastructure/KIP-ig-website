# Blodfortyndende medicin - Aktuelt brug - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Blodfortyndende medicin - Aktuelt brug**

## ValueSet: Blodfortyndende medicin - Aktuelt brug 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BlodfortyndendeMedicin | *Version*:2.27.2 |
| Active as of 2022-06-28 | *Computable Name*:BlodfortyndendeMedicin |

 
Blodfortyndende medicin - Aktuelt brug 

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
  "id" : "BlodfortyndendeMedicin",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BlodfortyndendeMedicin",
  "version" : "2.27.2",
  "name" : "BlodfortyndendeMedicin",
  "title" : "Blodfortyndende medicin - Aktuelt brug",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Blodfortyndende medicin - Aktuelt brug",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BloodThinnersTreatment",
      "concept" : [{
        "code" : "anticoagulant",
        "display" : "AK behandling"
      },
      {
        "code" : "antiplatelet",
        "display" : "Trombocythæmmende behandling"
      }]
    }]
  }
}

```
