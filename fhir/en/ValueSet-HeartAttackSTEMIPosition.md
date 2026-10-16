# Position af STEMI hjertestop - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Position af STEMI hjertestop**

## ValueSet: Position af STEMI hjertestop 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HeartAttackSTEMIPosition | *Version*:2.27.0 |
| Active as of 2022-06-07 | *Computable Name*:HeartAttackSTEMIPosition |

 
En mere detailiert positions beskrivelse af hjertestop 

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
  "id" : "HeartAttackSTEMIPosition",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HeartAttackSTEMIPosition",
  "version" : "2.27.0",
  "name" : "HeartAttackSTEMIPosition",
  "title" : "Position af STEMI hjertestop",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "En mere detailiert positions beskrivelse af hjertestop",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "anterior_segment_elevation_myocardial_infarction",
        "display" : "Anteriort (ST-elevationer i prækordiale afledninger/aVL/I"
      },
      {
        "code" : "non_anterior_segment_elevation_myocardial_infarction",
        "display" : "Non anteriort (ST-elevationer i inferiore afledninger/reciprokke anteriore ST-depressioner)"
      }]
    }]
  }
}

```
