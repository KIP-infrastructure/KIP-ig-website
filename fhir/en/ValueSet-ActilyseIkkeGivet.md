# Totaldosis i.v. actilyse er ikke givet; årsag - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Totaldosis i.v. actilyse er ikke givet; årsag**

## ValueSet: Totaldosis i.v. actilyse er ikke givet; årsag 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ActilyseIkkeGivet | *Version*:2.27.0 |
| Active as of 2022-06-28 | *Computable Name*:ActilyseIkkeGivet |

 
Årsagen til hvorfor Totaldosis i.v. actilyse ikke er givet 

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
  "id" : "ActilyseIkkeGivet",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ActilyseIkkeGivet",
  "version" : "2.27.0",
  "name" : "ActilyseIkkeGivet",
  "title" : "Totaldosis i.v. actilyse er ikke givet; årsag",
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
  "description" : "Årsagen til hvorfor Totaldosis i.v. actilyse ikke er givet",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ActilyseNotGiven",
      "concept" : [{
        "code" : "clinicaldeterioration",
        "display" : "Klinisk forringelse"
      },
      {
        "code" : "allergicreaction",
        "display" : "Allergisk reaktion"
      },
      {
        "code" : "plannedtreatment",
        "display" : "Planlagt interventionel behandling"
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
