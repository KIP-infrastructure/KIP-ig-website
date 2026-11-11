# Onkologisk behandlingsintention - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Onkologisk behandlingsintention**

## ValueSet: Onkologisk behandlingsintention 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OnkologiBehandlingsintention | *Version*:2.27.3 |
| Active as of 2022-05-16 | *Computable Name*:OnkologiBehandlingsintention |

 
Behandlingsintention for onkologiske forløb 

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
  "id" : "OnkologiBehandlingsintention",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OnkologiBehandlingsintention",
  "version" : "2.27.3",
  "name" : "OnkologiBehandlingsintention",
  "title" : "Onkologisk behandlingsintention",
  "status" : "active",
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Behandlingsintention for onkologiske forløb",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIntention",
      "concept" : [{
        "code" : "curative",
        "display" : "Kurativt"
      },
      {
        "code" : "palliative",
        "display" : "Palliativt"
      }]
    }]
  }
}

```
