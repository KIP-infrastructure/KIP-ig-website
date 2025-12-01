# Treatment type - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Treatment type**

## CodeSystem: Treatment type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/TreatmentType | *Version*:2.14.2 |
| Active as of 2022-06-03 | *Computable Name*:TreatmentType |

 
Treatment type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BehandlingDHR](ValueSet-BehandlingDHR.md)
* [BehandlingEndovaskulaerType](ValueSet-BehandlingEndovaskulaerType.md)
* [BehandlingKirurgiskEndovaskulaer](ValueSet-BehandlingKirurgiskEndovaskulaer.md)
* [LipomHandlingDHDB](ValueSet-LipomHandlingDHDB.md)
* [LokalStraaleterapi](ValueSet-LokalStraaleterapi.md)
* [NeoadjuverendeBehandling](ValueSet-NeoadjuverendeBehandling.md)
* [TreatmentCrossSection](ValueSet-TreatmentCrossSection.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "TreatmentType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentType",
  "version" : "2.14.2",
  "name" : "TreatmentType",
  "title" : "Treatment type",
  "status" : "active",
  "date" : "2022-06-03T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Treatment type",
  "content" : "complete",
  "count" : 21,
  "concept" : [
    {
      "code" : "endovascular",
      "display" : "Endovascular",
      "definition" : "Endovascular treatment",
      "concept" : [
        {
          "code" : "coil",
          "display" : "Coil",
          "definition" : "Coil"
        },
        {
          "code" : "intrasakkulat",
          "display" : "Intrasakkulat flowdiversion",
          "definition" : "Intrasakkulat flowdiversion"
        },
        {
          "code" : "ekstrasakkulat",
          "display" : "Ekstrasakkulat flowdiversion",
          "definition" : "Ekstrasakkulat flowdiversion"
        }
      ]
    },
    {
      "code" : "surgical",
      "display" : "Surgical",
      "definition" : "Surgical treatment"
    },
    {
      "code" : "operation",
      "display" : "Operation",
      "definition" : "Operation"
    },
    {
      "code" : "radiotherapy",
      "display" : "radiotherapy",
      "definition" : "Radiation / Strålebehandling"
    },
    {
      "code" : "chemotherapy",
      "display" : "Chemoterapy",
      "definition" : "Chemotherapy / Kemoterapi"
    },
    {
      "code" : "chemoradiationtherapy",
      "display" : "Chemoradiationtherapy",
      "definition" : "Chemoradiationtherapy / Kemostråleterapi"
    },
    {
      "code" : "immunotherapy",
      "display" : "Immunotherapy",
      "definition" : "Immunotherapy / Immunterapi"
    },
    {
      "code" : "neoadjuvant",
      "display" : "Neoadjuvant",
      "definition" : "Neoadjuvant / Neoadjuverende"
    },
    {
      "code" : "watchfull_waiting",
      "display" : "Watchfull waiting",
      "definition" : "Watchfull waiting"
    },
    {
      "code" : "cerclage",
      "display" : "Cerclage",
      "definition" : "Cerclage / SNOMED-CT: 1455007"
    },
    {
      "code" : "trochantergrip",
      "display" : "Trochantergrip",
      "definition" : "Trochantergrip"
    },
    {
      "code" : "splint",
      "display" : "Splint",
      "definition" : "Splint / SNOMED-CT: 16650009"
    },
    {
      "code" : "skinne",
      "display" : "Skinne",
      "definition" : "Skinne"
    },
    {
      "code" : "stem",
      "display" : "Stem",
      "definition" : "Stem"
    },
    {
      "code" : "uns",
      "display" : "UNS",
      "definition" : "UNS"
    },
    {
      "code" : "retrahere",
      "display" : "Retrahere",
      "definition" : "Retraheret - Tilbagetrækning, skrumpning"
    },
    {
      "code" : "exidere",
      "display" : "Exidere",
      "definition" : "Exideret - Fjerne"
    },
    {
      "code" : "in_situ",
      "display" : "Left in situ",
      "definition" : "Efterladt in situ"
    }
  ]
}

```
