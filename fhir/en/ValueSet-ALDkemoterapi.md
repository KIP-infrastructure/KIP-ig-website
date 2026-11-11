#  ALD_Kemoterapi - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* ** ALD_Kemoterapi**

## ValueSet: ALD_Kemoterapi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ALDkemoterapi | *Version*:2.27.2 |
| Active as of 2024-07-25 | *Computable Name*:ALDkemoterapi |

 
ALD kemoterapi 

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
  "id" : "ALDkemoterapi",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ALDkemoterapi",
  "version" : "2.27.2",
  "name" : "ALDkemoterapi",
  "title" : " ALD_Kemoterapi",
  "status" : "active",
  "date" : "2024-07-25T00:00:00+02:00",
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
  "description" : "ALD kemoterapi",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIntention",
      "concept" : [{
        "code" : "intensive",
        "display" : "Intensiv"
      },
      {
        "code" : "palliative",
        "display" : "Pallitativ"
      },
      {
        "code" : "semiintensiv",
        "display" : "Semiintensiv"
      }]
    }]
  }
}

```
