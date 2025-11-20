# Behandling afbrudt/ophørt - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandling afbrudt/ophørt**

## CodeSystem: Behandling afbrudt/ophørt 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/BehandlingAfbrudt | *Version*:2.14.1 |
| Active as of 2024-01-10 | *Computable Name*:BehandlingAfbrudt |

 
Årsager til behandling eller forløb er afbrudt/ophørt 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AarsagOphoerDNSL](ValueSet-AarsagOphoerDNSL.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "BehandlingAfbrudt",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/BehandlingAfbrudt",
  "version" : "2.14.1",
  "name" : "BehandlingAfbrudt",
  "title" : "Behandling afbrudt/ophørt",
  "status" : "active",
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Årsager til behandling eller forløb er afbrudt/ophørt",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 10,
  "concept" : [
    {
      "code" : "transplant",
      "display" : "Transplantation",
      "definition" : "Transplantation"
    },
    {
      "code" : "peritonitis",
      "display" : "Peritonitis",
      "definition" : "Peritonitis"
    },
    {
      "code" : "ultrafilt_svigt",
      "display" : "Ultrafiltrationssvigt",
      "definition" : "Ultrafiltrationssvigt"
    },
    {
      "code" : "inadekvat_dialyse",
      "display" : "Inadekvat dialyse",
      "definition" : "Inadekvat dialyse"
    },
    {
      "code" : "hernia",
      "display" : "Hernia (inkl Diafragma)",
      "definition" : "Hernia (inkl Diafragma)"
    },
    {
      "code" : "teknisk",
      "display" : "Teknisk (fx kateterproblem)",
      "definition" : "Teknisk (fx kateterproblem)"
    },
    {
      "code" : "anden_medicinsk",
      "display" : "Andre medicinske årsager (fx apopleksi)",
      "definition" : "Andre medicinske årsager (fx apopleksi)"
    },
    {
      "code" : "patient_valg",
      "display" : "Patient valg",
      "definition" : "Patient valg"
    },
    {
      "code" : "socialt",
      "display" : "Socialt",
      "definition" : "Socialt"
    },
    {
      "code" : "abdominal_op",
      "display" : "Abdominal operation",
      "definition" : "Abdominal operation"
    }
  ]
}

```
