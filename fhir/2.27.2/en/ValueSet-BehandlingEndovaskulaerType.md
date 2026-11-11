# Behandling; Endovaskulære behandlinger - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandling; Endovaskulære behandlinger**

## ValueSet: Behandling; Endovaskulære behandlinger 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingEndovaskulaerType | *Version*:2.27.2 |
| Active as of 2022-06-29 | *Computable Name*:BehandlingEndovaskulaerType |

 
Behandling; Endovaskulære behandlinger 

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
  "id" : "BehandlingEndovaskulaerType",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingEndovaskulaerType",
  "version" : "2.27.2",
  "name" : "BehandlingEndovaskulaerType",
  "title" : "Behandling; Endovaskulære behandlinger",
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
  "description" : "Behandling; Endovaskulære behandlinger",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentType",
      "concept" : [{
        "code" : "coil",
        "display" : "Coil"
      },
      {
        "code" : "intrasakkulat",
        "display" : "Intrasakkulat flowdiversion"
      },
      {
        "code" : "ekstrasakkulat",
        "display" : "Ekstrasakkulat flowdiversion"
      }]
    }]
  }
}

```
