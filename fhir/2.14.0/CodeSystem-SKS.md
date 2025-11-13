# Sundhedsvæsenets klassifikationssystem (SKS) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sundhedsvæsenets klassifikationssystem (SKS)**

## CodeSystem: Sundhedsvæsenets klassifikationssystem (SKS) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SKS | *Version*:2.14.0 |
| Active as of 2025-07-10 | *Computable Name*:SKS |
| *Other Identifiers:*OID:1.2.208.176.2.4 | |

 
Sundhedsvæsenets klassifikationssystem (SKS) - Udvalgte koder i RKKP. Link: urn:oid:1.2.208.176.2.4 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnatomiskLokation1](ValueSet-AnatomiskLokation1.md)
* [AnatomiskLokation2](ValueSet-AnatomiskLokation2.md)
* [AnatomiskLokation3](ValueSet-AnatomiskLokation3.md)
* [BehandlingCMMLMDS](ValueSet-BehandlingCMMLMDS.md)
* [BehandlingMDS](ValueSet-BehandlingMDS.md)
* [BehandlingsTypeStamcellestoetteLYFO](ValueSet-BehandlingsTypeStamcellestoetteLYFO.md)
* [CancertypeDCCG](ValueSet-CancertypeDCCG.md)
* [ClavienKomplikationsgrad](ValueSet-ClavienKomplikationsgrad.md)
* [ClavienKomplikationsgradDCCG](ValueSet-ClavienKomplikationsgradDCCG.md)
* [ClavienKomplikationsgradLangDCCG](ValueSet-ClavienKomplikationsgradLangDCCG.md)
* [DoedsaarsagSAH](ValueSet-DoedsaarsagSAH.md)
* [IDC10DPD](ValueSet-IDC10DPD.md)
* [IDC10DPDCancer](ValueSet-IDC10DPDCancer.md)
* [IngvinalhernieSpecificering](ValueSet-IngvinalhernieSpecificering.md)
* [IntraoperativeLaesionerKDCCG](ValueSet-IntraoperativeLaesionerKDCCG.md)
* [IntraoperativeLaesionerMDCCG](ValueSet-IntraoperativeLaesionerMDCCG.md)
* [Kemoterapiregime](ValueSet-Kemoterapiregime.md)
* [KontaktType1](ValueSet-KontaktType1.md)
* [LocationExtranodalFemale](ValueSet-LocationExtranodalFemale.md)
* [LocationExtranodalMale](ValueSet-LocationExtranodalMale.md)
* [LocationNodal](ValueSet-LocationNodal.md)
* [LocationPriSecNodalFemale](ValueSet-LocationPriSecNodalFemale.md)
* [LocationPriSecNodalMale](ValueSet-LocationPriSecNodalMale.md)
* [LokationAneurismeSAH](ValueSet-LokationAneurismeSAH.md)
* [MKategoriDCCG](ValueSet-MKategoriDCCG.md)
* [MenisklaesionMedialLateralDKRR](ValueSet-MenisklaesionMedialLateralDKRR.md)
* [NKategoriDCCG](ValueSet-NKategoriDCCG.md)
* [OperationssideHoejreVenstreDobbeltsidig](ValueSet-OperationssideHoejreVenstreDobbeltsidig.md)
* [OperationssideKAR](ValueSet-OperationssideKAR.md)
* [OperationstypeLYFO](ValueSet-OperationstypeLYFO.md)
* [OperativtFundIngvinalhernieDHDB](ValueSet-OperativtFundIngvinalhernieDHDB.md)
* [PraeoperativMetastaseBehandlingDCCG](ValueSet-PraeoperativMetastaseBehandlingDCCG.md)
* [ProcedureUdfoertDCCG](ValueSet-ProcedureUdfoertDCCG.md)
* [ProcedureUdfoertK1DCCG](ValueSet-ProcedureUdfoertK1DCCG.md)
* [ProcedureUdfoertR1DCCG](ValueSet-ProcedureUdfoertR1DCCG.md)
* [SKSApopleksiDiagnoser](ValueSet-SKSApopleksiDiagnoser.md)
* [SKSExtraModularDisease](ValueSet-SKSExtraModularDisease.md)
* [SKSOperationerKAR](ValueSet-SKSOperationerKAR.md)
* [SKSSymptomatiskAsymptomatisk](ValueSet-SKSSymptomatiskAsymptomatisk.md)
* [SKSUdskrivningsdiagnoserTrombolyse](ValueSet-SKSUdskrivningsdiagnoserTrombolyse.md)
* [SKSVentrikelEsophagus](ValueSet-SKSVentrikelEsophagus.md)
* [SKScTNMcM](ValueSet-SKScTNMcM.md)
* [SKScTNMcN](ValueSet-SKScTNMcN.md)
* [SKScTNMcT](ValueSet-SKScTNMcT.md)
* [SKShjertesvigtDHD](ValueSet-SKShjertesvigtDHD.md)
* [TKategoriDCCG](ValueSet-TKategoriDCCG.md)
* [Transplantation](ValueSet-Transplantation.md)
* [Transplantation1](ValueSet-Transplantation1.md)
* [TransplantationTypeDHR](ValueSet-TransplantationTypeDHR.md)
* [TransplantationstypeCML](ValueSet-TransplantationstypeCML.md)
* [TreatmentCrossSection](ValueSet-TreatmentCrossSection.md)
* [TreatmentScheduledDAMYDA](ValueSet-TreatmentScheduledDAMYDA.md)
* [TumorLokalisationDCCG](ValueSet-TumorLokalisationDCCG.md)
* [LocationExtranodalFemale_V2](ValueSet-locationExtranodalFemale-V2.md)
* [LocationExtranodalMale_V2](ValueSet-locationExtranodalMale-V2.md)
* [LocationNodal_V2](ValueSet-locationNodal-V2.md)

This code system `https://kip.rkkp.dk/fhir/CodeSystem/SKS` provides **a fragment** that includes following codes in an undefined hierarchy:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SKS",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.208.176.2.4"
    }
  ],
  "version" : "2.14.0",
  "name" : "SKS",
  "title" : "Sundhedsvæsenets klassifikationssystem (SKS)",
  "status" : "active",
  "date" : "2025-07-10T00:00:00+02:00",
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
  "description" : "Sundhedsvæsenets klassifikationssystem (SKS) - Udvalgte koder i RKKP. Link: urn:oid:1.2.208.176.2.4",
  "content" : "fragment",
  "concept" : [
    {
      "code" : "AAF1",
      "display" : "Indlæggelse",
      "definition" : "AAF1 - Indlæggelse"
    },
    {
      "code" : "AAF2",
      "display" : "Ambulant",
      "definition" : "AAF2 - Ambulant"
    },
    {
      "code" : "AZCD10",
      "display" : "cT0: Primær tumor ikke påvist",
      "definition" : "AZCD10 - cT0: Primær tumor ikke påvist"
    },
    {
      "code" : "AZCD12",
      "display" : "cTis: Carcinoma in situ",
      "definition" : "AZCD12 - cTis: Carcinoma in situ"
    },
    {
      "code" : "AZCD13",
      "display" : "cT1: Primær tumors størrelse/udstrækning",
      "definition" : "AZCD13 - cT1: Primær tumors størrelse/udstrækning"
    },
    {
      "code" : "AZCD14",
      "display" : "cT2: Primær tumors størrelse/udstrækning",
      "definition" : "AZCD14 - cT2: Primær tumors størrelse/udstrækning"
    },
    {
      "code" : "AZCD15",
      "display" : "cT3: Primær tumors størrelse/udstrækning",
      "definition" : "AZCD15 - cT3: Primær tumors størrelse/udstrækning"
    },
    {
      "code" : "AZCD16",
      "display" : "cT4: Primær tumors størrelse/udstrækning",
      "definition" : "AZCD16 - cT4: Primær tumors størrelse/udstrækning",
      "concept" : [
        {
          "code" : "AZCD16A",
          "display" : "cT4a: Primær tumors størrelse/udstrækning",
          "definition" : "AZCD16A - cT4a: Primær tumors størrelse/udstrækning"
        },
        {
          "code" : "AZCD16B",
          "display" : "cT4b: Primær tumors størrelse/udstrækning",
          "definition" : "AZCD16B - cT4b: Primær tumors størrelse/udstrækning"
        },
        {
          "code" : "AZCD16C",
          "display" : "cT4c: Primær tumors størrelse/udstrækning",
          "definition" : "AZCD16C - cT4c: Primær tumors størrelse/udstrækning"
        },
        {
          "code" : "AZCD16D",
          "display" : "cT4d: Primær tumors størrelse/udstrækning",
          "definition" : "AZCD16D - cT4d: Primær tumors størrelse/udstrækning"
        },
        {
          "code" : "AZCD16E",
          "display" : "cT4e: Primær tumors størrelse/udstrækning",
          "definition" : "AZCD16E - cT4e: Primær tumors størrelse/udstrækning"
        }
      ]
    },
    {
      "code" : "AZCD19",
      "display" : "cTx: Oplysning om tumors størrelse foreligger ikke i afd.",
      "definition" : "AZCD19 - cTx: Oplysning om tumors størrelse foreligger ikke i afd."
    },
    {
      "code" : "AZCD30",
      "display" : "cN0: Ingen regionale lymfeknudemetastaser",
      "definition" : "AZCD30 - cN0: Ingen regionale lymfeknudemetastaser"
    },
    {
      "code" : "AZCD31",
      "display" : "cN1: Regional lymfeknudemetastase",
      "definition" : "AZCD31 - cN1: Regional lymfeknudemetastase"
    },
    {
      "code" : "AZCD32",
      "display" : "cN2: Regional lymfeknudemetastase",
      "definition" : "AZCD32 - cN2: Regional lymfeknudemetastase"
    },
    {
      "code" : "AZCD33",
      "display" : "cN3: Regional lymfeknudemetastase",
      "definition" : "AZCD33 - cN3: Regional lymfeknudemetastase"
    },
    {
      "code" : "AZCD39",
      "display" : "cNx: Opl om regional lymfeknudestatus foreligger ikke i afd",
      "definition" : "AZCD39 - cNx: Opl om regional lymfeknudestatus foreligger ikke i afd"
    },
    {
      "code" : "AZCD40",
      "display" : "cM0: Ingen fjernmetastaser",
      "definition" : "AZCD40 - cM0: Ingen fjernmetastaser"
    },
    {
      "code" : "AZCD41",
      "display" : "cM1: Fjernmetastase",
      "definition" : "AZCD41 - cM1: Fjernmetastase",
      "concept" : [
        {
          "code" : "AZCD41C",
          "display" : "cM1c: Fjernmetastase",
          "definition" : "AZCD41C - cM1c: Fjernmetastase"
        }
      ]
    },
    {
      "code" : "BOHJ1",
      "display" : "Behandling med antistoffer",
      "definition" : "Behandling med antistoffer"
    },
    {
      "code" : "BOQA",
      "display" : "Behandling med blodtransfusion",
      "definition" : "Behandling med blodtransfusion"
    },
    {
      "code" : "BOQF0",
      "display" : "Autolog knoglemarvstransplantation",
      "definition" : "BOQF0 - Autolog knoglemarvstransplantation"
    },
    {
      "code" : "BOQF1",
      "display" : "Allogen knoglemarvstransplantation",
      "definition" : "BOQF1 - Allogen knoglemarvstransplantation"
    },
    {
      "code" : "BOQF2",
      "display" : "Non myeloablativ knoglemarvstransplantation (mini-KMT)",
      "definition" : "BOQF2 - Non myeloablativ knoglemarvstransplantation (mini-KMT)"
    },
    {
      "code" : "BWG",
      "display" : "Strålebehandling",
      "definition" : "BWG - Strålebehandling"
    },
    {
      "code" : "BWHA",
      "display" : "Cytostatisk behandling",
      "definition" : "Cytostatisk behandling",
      "concept" : [
        {
          "code" : "BWHA119",
          "display" : "Behandling med cyclophosphamid+doxorubicin+vinkristin+prednisolon (CHOP)",
          "definition" : "Behandling med cyclophosphamid+doxorubicin+vinkristin+prednisolon (CHOP)"
        },
        {
          "code" : "BWHA120",
          "display" : "Behandling med MIME",
          "definition" : "Behandling med MIME"
        },
        {
          "code" : "BWHA134",
          "display" : "Behandling med cyclophosphamid+vinkristin+prednisolon (CVP) (COP)",
          "definition" : "Behandling med cyclophosphamid+vinkristin+prednisolon (CVP) (COP)"
        },
        {
          "code" : "BWHA137",
          "display" : "Behandling med mitoxantron+vinkristin+prednisolon (NOP)",
          "definition" : "Behandling med mitoxantron+vinkristin+prednisolon (NOP)"
        },
        {
          "code" : "BWHA138",
          "display" : "Behandling med BEACOPP",
          "definition" : "Behandling med BEACOPP"
        },
        {
          "code" : "BWHA156",
          "display" : "Behandling med cyclophosphamid+procarbazin+vinkristin+prednisolon (COPP)",
          "definition" : "Behandling med cyclophosphamid+procarbazin+vinkristin+prednisolon (COPP)"
        },
        {
          "code" : "BWHA164",
          "display" : "Behandling med cyclophosphamid+etoposid+vinkristin+prednisolon (CEOP)",
          "definition" : "Behandling med cyclophosphamid+etoposid+vinkristin+prednisolon (CEOP)"
        },
        {
          "code" : "BWHA165",
          "display" : "Behandling med cyclophosphamid+doxorubicin+vinkristin+etoposid+prednisolon (CHOEP)",
          "definition" : "Behandling med cyclophosphamid+doxorubicin+vinkristin+etoposid+prednisolon (CHOEP)"
        },
        {
          "code" : "BWHA166",
          "display" : "Behandling med cyclophosphamid+mitoxantron+vinkristin+prednisolon (CNOP)",
          "definition" : "Behandling med cyclophosphamid+mitoxantron+vinkristin+prednisolon (CNOP)"
        },
        {
          "code" : "BWHA167",
          "display" : "Behandling med doxyrubicin+bleomycin+vinblastin+dacarbazin (ABVD)",
          "definition" : "Behandling med doxyrubicin+bleomycin+vinblastin+dacarbazin (ABVD)"
        },
        {
          "code" : "BWHA168",
          "display" : "Behandling med klorambucil+vinblastin+procarbazin+prednisolon (LVPP)",
          "definition" : "Behandling med klorambucil+vinblastin+procarbazin+prednisolon (LVPP)"
        },
        {
          "code" : "BWHA258",
          "display" : "Behandling med cylophosphamid+doxorubicin+vinkristin+prednisolon eskaleret dosis (maxiCHOP)",
          "definition" : "Behandling med cylophosphamid+doxorubicin+vinkristin+prednisolon eskaleret dosis (maxiCHOP)"
        },
        {
          "code" : "BWHA309",
          "display" : "Behandling med højdosis melfalan (konditionering)",
          "definition" : "BWHA309 - Behandling med højdosis melfalan (konditionering)"
        },
        {
          "code" : "BWHA310",
          "display" : "Behandling med BEAM (konditionering)",
          "definition" : "Behandling med BEAM (konditionering)"
        }
      ]
    },
    {
      "code" : "DC15",
      "display" : "Kræft i spiserøret",
      "definition" : "Kræft i spiserøret"
    },
    {
      "code" : "DC16",
      "display" : "Kræft i mavesækken",
      "definition" : "Kræft i mavesækken"
    },
    {
      "code" : "DC17",
      "display" : "Kræft i tyndtarmen",
      "definition" : "Kræft i tyndtarmen"
    },
    {
      "code" : "DC22",
      "display" : "Kræft i leveren og intrahepatiske galdegange",
      "definition" : "Kræft i leveren og intrahepatiske galdegange"
    },
    {
      "code" : "DC25",
      "display" : "Kræft i bugspytkirtlen",
      "definition" : "Kræft i bugspytkirtlen"
    },
    {
      "code" : "DC32",
      "display" : "Kræft i strubehovedet",
      "definition" : "Kræft i strubehovedet"
    },
    {
      "code" : "DC43",
      "display" : "Modermærkekræft i huden",
      "definition" : "Modermærkekræft i huden"
    },
    {
      "code" : "DC50",
      "display" : "Brystkræft",
      "definition" : "Brystkræft"
    },
    {
      "code" : "DC53",
      "display" : "Kræft i livmoderhalsen",
      "definition" : "Kræft i livmoderhalsen"
    },
    {
      "code" : "DC61",
      "display" : "Kræft i blærehalskirtlen",
      "definition" : "Kræft i blærehalskirtlen"
    },
    {
      "code" : "DC62",
      "display" : "Testikelkræft",
      "definition" : "Testikelkræft"
    },
    {
      "code" : "DC67",
      "display" : "Kræft i urinblæren",
      "definition" : "Kræft i urinblæren"
    },
    {
      "code" : "DC64-DC66",
      "display" : "Kræft i nyre, nyrebækken og urinleder",
      "definition" : "Kræft i nyre, nyrebækken og urinleder"
    },
    {
      "code" : "DC73",
      "display" : "Kræft i skjoldbruskkirtlen",
      "definition" : "Kræft i skjoldbruskkirtlen"
    },
    {
      "code" : "DC81",
      "display" : "Hodgkin lymfomer",
      "definition" : "Hodgkin lymfomer"
    },
    {
      "code" : "DC90",
      "display" : "Maligne plasmacelle neoplasier",
      "definition" : "Maligne plasmacelle neoplasier"
    },
    {
      "code" : "DC18",
      "display" : "Kræft i tyktarmen",
      "definition" : "Kræft i tyktarmen",
      "concept" : [
        {
          "code" : "DC180",
          "display" : "Kræft i caecum",
          "definition" : "Kræft i caecum"
        },
        {
          "code" : "DC182",
          "display" : "Kræft i colon ascendens",
          "definition" : "Kræft i colon ascendens"
        },
        {
          "code" : "DC183",
          "display" : "Kræft i flexura coli dextra",
          "definition" : "Kræft i flexura coli dextra"
        },
        {
          "code" : "DC184",
          "display" : "Kræft i colon transversum",
          "definition" : "Kræft i colon transversum"
        },
        {
          "code" : "DC185",
          "display" : "Kræft i flexura coli sinistra",
          "definition" : "Kræft i flexura coli sinistra"
        },
        {
          "code" : "DC186",
          "display" : "Kræft i colon descendens",
          "definition" : "Kræft i colon descendens"
        },
        {
          "code" : "DC187",
          "display" : "Kræft i colon sigmoideum",
          "definition" : "Kræft i colon sigmoideum"
        },
        {
          "code" : "DC189",
          "display" : "Kræft i tyktarmen UNS",
          "definition" : "Kræft i tyktarmen UNS"
        }
      ]
    },
    {
      "code" : "DC20",
      "display" : "Kræft i endetarmen",
      "definition" : "Kræft i endetarmen"
    },
    {
      "code" : "DC780",
      "display" : "Fjernmetastase i lunge",
      "definition" : "Fjernmetastase i lunge"
    },
    {
      "code" : "DC786B",
      "display" : "Metastase i peritoneum",
      "definition" : "DC786B - Metastase i peritoneum"
    },
    {
      "code" : "DC787",
      "display" : "Fjernmetastase i leveren",
      "definition" : "Fjernmetastase i leveren"
    },
    {
      "code" : "DC798D",
      "display" : "Fjernmetastase UNS",
      "definition" : "Fjernmetastase UNS"
    },
    {
      "code" : "DI110",
      "display" : "Hypertensiv hjertesygdom med inkompenseret hjertesvigt",
      "definition" : "DI110 - Hypertensiv hjertesygdom med inkompenseret hjertesvigt"
    },
    {
      "code" : "DI130",
      "display" : "Hypertensiv hjertesygdom og nyresygdom med hjertesvigt",
      "definition" : "DI130 - Hypertensiv hjertesygdom og nyresygdom med hjertesvigt"
    },
    {
      "code" : "DI132",
      "display" : "Hypertensiv hjertesygdom og nyresygdom med hjertesvigt og nyresvigt",
      "definition" : "DI132 - Hypertensiv hjertesygdom og nyresygdom med hjertesvigt og nyresvigt"
    },
    {
      "code" : "DI420",
      "display" : "Dilateret kardiomyopati",
      "definition" : "DI420 - Dilateret kardiomyopati"
    },
    {
      "code" : "DI426",
      "display" : "Alkoholisk kardiomyopati",
      "definition" : "DI426 - Alkoholisk kardiomyopati"
    },
    {
      "code" : "DI427",
      "display" : "Kardiomyopati forårsaget af lægemiddel eller andet agens",
      "definition" : "DI427 - Kardiomyopati forårsaget af lægemiddel eller andet agens"
    },
    {
      "code" : "DI429",
      "display" : "Kardiomyopati UNS",
      "definition" : "DI429 - Kardiomyopati UNS"
    },
    {
      "code" : "DI500",
      "display" : "Kronisk hjerteinsufficiens",
      "definition" : "DI500 - Kronisk hjerteinsufficiens"
    },
    {
      "code" : "DI501",
      "display" : "Venstresidig hjerteinsufficiens",
      "definition" : "DI501 - Venstresidig hjerteinsufficiens",
      "concept" : [
        {
          "code" : "DI501B",
          "display" : "Kardielt lungeødem",
          "definition" : "DI501B - Kardielt lungeødem"
        }
      ]
    },
    {
      "code" : "DI509",
      "display" : "Hjertesvigt UNS",
      "definition" : "DI509 - Hjertesvigt UNS"
    },
    {
      "code" : "DI60",
      "display" : "Subaraknoidalblødning",
      "definition" : "DI60 - Subaraknoidalblødning"
    },
    {
      "code" : "DI61",
      "display" : "Hjerneblødning",
      "definition" : "DI61 - Hjerneblødning"
    },
    {
      "code" : "DI63",
      "display" : "Hjerneinfarkt",
      "definition" : "DI63 - Hjerneinfarkt",
      "concept" : [
        {
          "code" : "DI630",
          "display" : "Hjerneinfarkt forårsaget af trombose i præcerebral arterie",
          "definition" : "DI630 - Hjerneinfarkt forårsaget af trombose i præcerebral arterie"
        },
        {
          "code" : "DI631",
          "display" : "Hjerneinfarkt forårsaget af emboli i præcerebral arterie",
          "definition" : "DI631 - Hjerneinfarkt forårsaget af emboli i præcerebral arterie"
        },
        {
          "code" : "DI632",
          "display" : "Hjerneinfarkt forårsaget af tillukning eller stenose i præcerebral arterie UNS",
          "definition" : "DI632 - Hjerneinfarkt forårsaget af tillukning eller stenose i præcerebral arterie UNS"
        },
        {
          "code" : "DI633",
          "display" : "Hjerneinfarkt forårsaget af trombose i cerebral arterie",
          "definition" : "DI633 - Hjerneinfarkt forårsaget af trombose i cerebral arterie"
        },
        {
          "code" : "DI634",
          "display" : "Hjerneinfarkt forårsaget af emboli i cerebral arterie",
          "definition" : "DI634 - Hjerneinfarkt forårsaget af emboli i cerebral arterie"
        },
        {
          "code" : "DI635",
          "display" : "Hjerneinfarkt forårsaget af tillukning eller stenose i cerebral arterie UNS",
          "definition" : "DI635 - Hjerneinfarkt forårsaget af tillukning eller stenose i cerebral arterie UNS"
        },
        {
          "code" : "DI638",
          "display" : "Anden form for hjerneinfarkt",
          "definition" : "DI638 - Anden form for hjerneinfarkt"
        },
        {
          "code" : "DI639",
          "display" : "Hjerneinfarkt UNS",
          "definition" : "DI639 - Hjerneinfarkt UNS"
        }
      ]
    },
    {
      "code" : "DI64",
      "display" : "Slagtilfælde uden oplysning om blødning eller infarkt",
      "definition" : "DI64 - Slagtilfælde uden oplysning om blødning eller infarkt"
    },
    {
      "code" : "DG45",
      "display" : "Transitorisk cerebral iskæmi og beslægtede syndromer",
      "definition" : "DG45 - Transitorisk cerebral iskæmi og beslægtede syndromer"
    },
    {
      "code" : "DK40",
      "display" : "Lyskebrok",
      "definition" : "DK40 - Lyskebrok"
    },
    {
      "code" : "DK41",
      "display" : "Lårbrok",
      "definition" : "DK41 - Lårbrok"
    },
    {
      "code" : "KJFB20",
      "display" : "Ileocækal resektion",
      "definition" : "KJFB20 - Ileocækal resektion"
    },
    {
      "code" : "KJFB30",
      "display" : "Højresidig hemikolektomi",
      "definition" : "KJFB30 - Højresidig hemikolektomi",
      "concept" : [
        {
          "code" : "KJFB30A",
          "display" : "Udvidet højresidig hemikolektomi",
          "definition" : "KJFB30A - Udvidet højresidig hemikolektomi"
        }
      ]
    },
    {
      "code" : "KJFB34",
      "display" : "Anden laparoskopisk samtidig resektion af tyndtarm og tyktarm",
      "definition" : "KJFB34 - Anden laparoskopisk samtidig resektion af tyndtarm og tyktarm"
    },
    {
      "code" : "KJFB40",
      "display" : "Resektion af colon transversum",
      "definition" : "KJFB40 - Resektion af colon transversum"
    },
    {
      "code" : "KJFB43",
      "display" : "Venstresidig hemikolektomi",
      "definition" : "KJFB43 - Venstresidig hemikolektomi"
    },
    {
      "code" : "KJFB46",
      "display" : "Resektion af colon sigmoideum",
      "definition" : "KJFB46 - Resektion af colon sigmoideum"
    },
    {
      "code" : "KJFB50",
      "display" : "Anden colonresektion",
      "definition" : "KJFB50 - Anden colonresektion"
    },
    {
      "code" : "KJFB53",
      "display" : "Resektion af venstre fleksur",
      "definition" : "KJFB53 - Resektion af venstre fleksur"
    },
    {
      "code" : "KJFB60",
      "display" : "Resektion af colon sigmoideum med kolostomi",
      "definition" : "KJFB60 - Resektion af colon sigmoideum med kolostomi"
    },
    {
      "code" : "KJFB63",
      "display" : "Anden tyktarmsresektion med kolostomi og distal lukning",
      "definition" : "KJFB63 - Anden tyktarmsresektion med kolostomi og distal lukning"
    },
    {
      "code" : "KJFH00",
      "display" : "Kolektomi og ileorektostomi",
      "definition" : "KJFH00 - Kolektomi og ileorektostomi"
    },
    {
      "code" : "KJFH10",
      "display" : "Kolektomi og ileostomi",
      "definition" : "KJFH10 - Kolektomi og ileostomi"
    },
    {
      "code" : "KJFH20",
      "display" : "Proktokolektomi og ileostomi",
      "definition" : "KJFH20 - Proktokolektomi og ileostomi"
    },
    {
      "code" : "KJGB00",
      "display" : "Resektion af endetarm",
      "definition" : "KJGB00 - Resektion af endetarm"
    },
    {
      "code" : "KJGB10",
      "display" : "Resektion af endetarm med kolostomi",
      "definition" : "KJGB10 - Resektion af endetarm med kolostomi"
    },
    {
      "code" : "KJGB32",
      "display" : "Abdominal og intersphincterisk excision af endetarm",
      "definition" : "KJGB32 - Abdominal og intersphincterisk excision af endetarm"
    },
    {
      "code" : "KJGB35",
      "display" : "Abdominal og ischioanal excision af endetarm",
      "definition" : "KJGB35 - Abdominal og ischioanal excision af endetarm"
    },
    {
      "code" : "KJGB36",
      "display" : "Abdominal og ekstralevatorisk excision af endetarm",
      "definition" : "KJGB36 - Abdominal og ekstralevatorisk excision af endetarm"
    },
    {
      "code" : "KJAH00",
      "display" : "Eksplorativ laparotomi",
      "definition" : "KJAH00 - Eksplorativ laparotomi"
    },
    {
      "code" : "KJMA",
      "display" : "Splenektomier",
      "definition" : "KJMA - Splenektomier"
    },
    {
      "code" : "KPAF20",
      "display" : "Trombendarterektomi i a. carotis communis",
      "definition" : "KPAF20 - Trombendarterektomi i a. carotis communis"
    },
    {
      "code" : "KPAF21",
      "display" : "Trombendarterektomi i a. carotis interna",
      "definition" : "KPAF21 - Trombendarterektomi i a. carotis interna"
    },
    {
      "code" : "KPAF22",
      "display" : "Trombendarterektomi i a. carotis externa",
      "definition" : "KPAF22 - Trombendarterektomi i a. carotis externa"
    },
    {
      "code" : "KPAK21",
      "display" : "Reimplantation af a. carotis interna",
      "definition" : "KPAK21 - Reimplantation af a. carotis interna"
    },
    {
      "code" : "KPAP10",
      "display" : "Perkut. plastik på truncus brachiocephalicus",
      "definition" : "KPAP10 - Perkut. plastik på truncus brachiocephalicus"
    },
    {
      "code" : "KPAP20",
      "display" : "Perkut. plastik på a. carotis communis",
      "definition" : "KPAP20 - Perkut. plastik på a. carotis communis"
    },
    {
      "code" : "KPAP21",
      "display" : "Perkut. plastik på a. carotis interna",
      "definition" : "KPAP21 - Perkut. plastik på a. carotis interna"
    },
    {
      "code" : "KPAP30",
      "display" : "Perkutan plastik på a. subclavia",
      "definition" : "KPAP30 - Perkutan plastik på a. subclavia"
    },
    {
      "code" : "KPAP99",
      "display" : "Perkut. plastik på an. gren på a. afgå. fra aortabuen",
      "definition" : "KPAP99 - Perkut. plastik på an. gren på a. afgå. fra aortabuen"
    },
    {
      "code" : "KPBP10",
      "display" : "Perkutan plastik på a. axillaris",
      "definition" : "KPBP10 - Perkutan plastik på a. axillaris"
    },
    {
      "code" : "KPBP20",
      "display" : "Perkutan plastik på a. brachialis",
      "definition" : "KPBP20 - Perkutan plastik på a. brachialis"
    },
    {
      "code" : "KPBP99",
      "display" : "Perkut. plastik på anden arterie i overekstremitet",
      "definition" : "KPBP99 - Perkut. plastik på anden arterie i overekstremitet"
    },
    {
      "code" : "KPBQ10",
      "display" : "Indsættelse af endoprotese i a. axillaris",
      "definition" : "KPBQ10 - Indsættelse af endoprotese i a. axillaris"
    },
    {
      "code" : "KPBQ20",
      "display" : "Indsættelse af endoprotese i a. brachialis",
      "definition" : "KPBQ20 - Indsættelse af endoprotese i a. brachialis"
    },
    {
      "code" : "KPBQ99",
      "display" : "Indsættelse af endoprotese i anden arterie i overekstremitet",
      "definition" : "KPBQ99 - Indsættelse af endoprotese i anden arterie i overekstremitet"
    },
    {
      "code" : "KPCG10",
      "display" : "Aneurismeoperation på supracøliakale el. jukstarenale ao.",
      "definition" : "KPCG10 - Aneurismeoperation på supracøliakale el. jukstarenale ao."
    },
    {
      "code" : "KPCP10",
      "display" : "Perkutan plastik på suprarenale aorta",
      "definition" : "KPCP10 - Perkutan plastik på suprarenale aorta"
    },
    {
      "code" : "KPCP20",
      "display" : "Perkut. plastik på truncus coeliacus el. grene",
      "definition" : "KPCP20 - Perkut. plastik på truncus coeliacus el. grene"
    },
    {
      "code" : "KPCP30",
      "display" : "Perkut. plastik på a. mesenterica superior",
      "definition" : "KPCP30 - Perkut. plastik på a. mesenterica superior"
    },
    {
      "code" : "KPCP40",
      "display" : "Perkutan plastik på a. renalis",
      "definition" : "KPCP40 - Perkutan plastik på a. renalis"
    },
    {
      "code" : "KPCP40A",
      "display" : "Perkut. plastik på arterie til transplanteret nyre",
      "definition" : "KPCP40A - Perkut. plastik på arterie til transplanteret nyre"
    },
    {
      "code" : "KPCP99",
      "display" : "Perkut. plastik på anden visceralarterie",
      "definition" : "KPCP99 - Perkut. plastik på anden visceralarterie"
    },
    {
      "code" : "KPCQ10",
      "display" : "Inds af endoprotese i supracøliakale el. jukstrarenale aorta",
      "definition" : "KPCQ10 - Inds af endoprotese i supracøliakale el. jukstrarenale aorta"
    },
    {
      "code" : "KPCQ20",
      "display" : "Indsættelse af endoprotese i truncus coeliacus el. grene",
      "definition" : "KPCQ20 - Indsættelse af endoprotese i truncus coeliacus el. grene"
    },
    {
      "code" : "KPCQ30",
      "display" : "Indsættelse af endoprotese i a. mesenterica superior",
      "definition" : "KPCQ30 - Indsættelse af endoprotese i a. mesenterica superior"
    },
    {
      "code" : "KPCQ40",
      "display" : "Indsættelse af endoprotese i a. renalis",
      "definition" : "KPCQ40 - Indsættelse af endoprotese i a. renalis"
    },
    {
      "code" : "KPCQ99",
      "display" : "Indsættelse af endoprotese i anden visceralarterie",
      "definition" : "KPCQ99 - Indsættelse af endoprotese i anden visceralarterie"
    },
    {
      "code" : "KPCU83",
      "display" : "Perkut. plastik på byp. fra suprarenale ao. el. viscerala.",
      "definition" : "KPCU83 - Perkut. plastik på byp. fra suprarenale ao. el. viscerala."
    },
    {
      "code" : "KPCU84",
      "display" : "Indsæt. af stent i byp. fra suprarenale ao. el. viscerala.",
      "definition" : "KPCU84 - Indsæt. af stent i byp. fra suprarenale ao. el. viscerala."
    },
    {
      "code" : "KPCW20",
      "display" : "Perkut. translum. fenestrering af suprarenale ao.",
      "definition" : "KPCW20 - Perkut. translum. fenestrering af suprarenale ao."
    },
    {
      "code" : "KPDA10",
      "display" : "Eksploration af infrarenale aorta",
      "definition" : "KPDA10 - Eksploration af infrarenale aorta"
    },
    {
      "code" : "KPDG10",
      "display" : "Aneurismeoperation på infrarenale aorta",
      "definition" : "KPDG10 - Aneurismeoperation på infrarenale aorta"
    },
    {
      "code" : "KPDG20",
      "display" : "Aneurismeoperation m. aortoiliakal byp.",
      "definition" : "KPDG20 - Aneurismeoperation m. aortoiliakal byp."
    },
    {
      "code" : "KPDG21",
      "display" : "Aneurismeoperation m. aortobi-iliakal byp.",
      "definition" : "KPDG21 - Aneurismeoperation m. aortobi-iliakal byp."
    },
    {
      "code" : "KPDG22",
      "display" : "Aneurismeop. m. aortoiliakal/kontralat. iliakofemoral byp.",
      "definition" : "KPDG22 - Aneurismeop. m. aortoiliakal/kontralat. iliakofemoral byp."
    },
    {
      "code" : "KPDG23",
      "display" : "Aneurismeoperation m. aortofemoral byp.",
      "definition" : "KPDG23 - Aneurismeoperation m. aortofemoral byp."
    },
    {
      "code" : "KPDG24",
      "display" : "Aneurismeoperation m. aortobifemoral byp.",
      "definition" : "KPDG24 - Aneurismeoperation m. aortobifemoral byp."
    },
    {
      "code" : "KPDP10",
      "display" : "Perkutan plastik på infrarenale aorta",
      "definition" : "KPDP10 - Perkutan plastik på infrarenale aorta"
    },
    {
      "code" : "KPDP30",
      "display" : "Perkutan plastik på iliaka-arterie",
      "definition" : "KPDP30 - Perkutan plastik på iliaka-arterie"
    },
    {
      "code" : "KPDQ10",
      "display" : "Indsættelse af endoprotese i infrarenale aorta",
      "definition" : "KPDQ10 - Indsættelse af endoprotese i infrarenale aorta"
    },
    {
      "code" : "KPDQ20",
      "display" : "Indsættelse af endoprotese aorto-iliakalt",
      "definition" : "KPDQ20 - Indsættelse af endoprotese aorto-iliakalt"
    },
    {
      "code" : "KPDQ21",
      "display" : "Indsættelse af endoprotese aorto-bi-iliakalt",
      "definition" : "KPDQ21 - Indsættelse af endoprotese aorto-bi-iliakalt"
    },
    {
      "code" : "KPDU83",
      "display" : "Perkut. plastik på byp. fra infraren. ao. el. iliaka-a.",
      "definition" : "KPDU83 - Perkut. plastik på byp. fra infraren. ao. el. iliaka-a."
    },
    {
      "code" : "KPDU84",
      "display" : "Indsæt. af stent i byp. fra infraren. ao. el. iliaka-a.",
      "definition" : "KPDU84 - Indsæt. af stent i byp. fra infraren. ao. el. iliaka-a."
    },
    {
      "code" : "KPDW20",
      "display" : "Perkut. translum. fenestrering af infrarenale ao.",
      "definition" : "KPDW20 - Perkut. translum. fenestrering af infrarenale ao."
    },
    {
      "code" : "KPEH20",
      "display" : "Byp. fra a. femor. til a. poplit. oven for knæet",
      "definition" : "KPEH20 - Byp. fra a. femor. til a. poplit. oven for knæet"
    },
    {
      "code" : "KPEH30",
      "display" : "Byp. fra a. femor. til a. poplit. neden for knæet",
      "definition" : "KPEH30 - Byp. fra a. femor. til a. poplit. neden for knæet"
    },
    {
      "code" : "KPEP10",
      "display" : "Perkut. plastik på a. femoralis communis",
      "definition" : "KPEP10 - Perkut. plastik på a. femoralis communis"
    },
    {
      "code" : "KPEP11",
      "display" : "Perkut. plastik på a. profunda femoris",
      "definition" : "KPEP11 - Perkut. plastik på a. profunda femoris"
    },
    {
      "code" : "KPEP12",
      "display" : "Perkut. plastik på a. femoralis superficialis",
      "definition" : "KPEP12 - Perkut. plastik på a. femoralis superficialis"
    },
    {
      "code" : "KPEQ10",
      "display" : "Indsættelse af endoprotese i a. femoralis communis",
      "definition" : "KPEQ10 - Indsættelse af endoprotese i a. femoralis communis"
    },
    {
      "code" : "KPEQ11",
      "display" : "Indsættelse af endoprotese i a. profunda femoris",
      "definition" : "KPEQ11 - Indsættelse af endoprotese i a. profunda femoris"
    },
    {
      "code" : "KPEQ12",
      "display" : "Indsættelse af endoprotese i a. femoralis superficialis",
      "definition" : "KPEQ12 - Indsættelse af endoprotese i a. femoralis superficialis"
    },
    {
      "code" : "KPEQ99",
      "display" : "An. indsæt. af endoprotese i a. femor. el. dens grene",
      "definition" : "KPEQ99 - An. indsæt. af endoprotese i a. femor. el. dens grene"
    },
    {
      "code" : "KPEU83",
      "display" : "Perkut. plastik på byp. fra a. femor. til a. poplit.",
      "definition" : "KPEU83 - Perkut. plastik på byp. fra a. femor. til a. poplit."
    },
    {
      "code" : "KPEU84",
      "display" : "Indsæt. af stent i byp. fra a. femor. til a. poplit.",
      "definition" : "KPEU84 - Indsæt. af stent i byp. fra a. femor. til a. poplit."
    },
    {
      "code" : "KPFH20",
      "display" : "Byp. fra a. femor. el. a. poplit. til a. i underben",
      "definition" : "KPFH20 - Byp. fra a. femor. el. a. poplit. til a. i underben"
    },
    {
      "code" : "KPFH21",
      "display" : "Byp. fra a. femor/poplit. til proks. del af a. tibialis ant.",
      "definition" : "KPFH21 - Byp. fra a. femor/poplit. til proks. del af a. tibialis ant."
    },
    {
      "code" : "KPFH22",
      "display" : "Byp. fra a. femor/poplit. til dist. del af a. tibialis ant.",
      "definition" : "KPFH22 - Byp. fra a. femor/poplit. til dist. del af a. tibialis ant."
    },
    {
      "code" : "KPFH23",
      "display" : "Byp. fra a. femor. el. a. poplit. til trun. tibioperonealis",
      "definition" : "KPFH23 - Byp. fra a. femor. el. a. poplit. til trun. tibioperonealis"
    },
    {
      "code" : "KPFH24",
      "display" : "Byp. fra a. femor/poplit. til proks. a. tibialis post.",
      "definition" : "KPFH24 - Byp. fra a. femor/poplit. til proks. a. tibialis post."
    },
    {
      "code" : "KPFH25",
      "display" : "Byp. fra a. femor. el. a. poplit. til dist. a. tibialis post",
      "definition" : "KPFH25 - Byp. fra a. femor. el. a. poplit. til dist. a. tibialis post"
    },
    {
      "code" : "KPFH26",
      "display" : "Byp. fra a. femor. el. a. poplit. til proks. a. peronealis",
      "definition" : "KPFH26 - Byp. fra a. femor. el. a. poplit. til proks. a. peronealis"
    },
    {
      "code" : "KPFH27",
      "display" : "Byp. fra a. femor. el. a. poplit. til dist. a. peronealis",
      "definition" : "KPFH27 - Byp. fra a. femor. el. a. poplit. til dist. a. peronealis"
    },
    {
      "code" : "KPFH28",
      "display" : "Byp. fra a. femor. el. a. poplit. til a. dorsalis pedis",
      "definition" : "KPFH28 - Byp. fra a. femor. el. a. poplit. til a. dorsalis pedis"
    },
    {
      "code" : "KPFH29",
      "display" : "Byp. fra a. femor/poplit. til a. tibialis post. i fod",
      "definition" : "KPFH29 - Byp. fra a. femor/poplit. til a. tibialis post. i fod"
    },
    {
      "code" : "KPFH99",
      "display" : "An. byp. fra a. femor. el. a. poplit. til a. i underben/fod",
      "definition" : "KPFH99 - An. byp. fra a. femor. el. a. poplit. til a. i underben/fod"
    },
    {
      "code" : "KPFP10",
      "display" : "Perkutan plastik på a. poplitea",
      "definition" : "KPFP10 - Perkutan plastik på a. poplitea"
    },
    {
      "code" : "KPFP30",
      "display" : "Perkut. plastik på arterie i underben el. fod",
      "definition" : "KPFP30 - Perkut. plastik på arterie i underben el. fod"
    },
    {
      "code" : "KPFQ10",
      "display" : "Indsættelse af endoprotese i a. poplitea",
      "definition" : "KPFQ10 - Indsættelse af endoprotese i a. poplitea"
    },
    {
      "code" : "KPFQ30",
      "display" : "Indsættelse af endoprotese i arterie i underben el. fod",
      "definition" : "KPFQ30 - Indsættelse af endoprotese i arterie i underben el. fod"
    },
    {
      "code" : "KPFU83",
      "display" : "Perkut. plastik på byp. fra a-fem/poplit. til a-underben/fod",
      "definition" : "KPFU83 - Perkut. plastik på byp. fra a-fem/poplit. til a-underben/fod"
    },
    {
      "code" : "KPFU84",
      "display" : "Indsæt. stent i byp. fra a. femor/poplit. til a-underben/fod",
      "definition" : "KPFU84 - Indsæt. stent i byp. fra a. femor/poplit. til a-underben/fod"
    },
    {
      "code" : "KPGU83",
      "display" : "Perkut. plastik på ekstra-anatomisk byp.",
      "definition" : "KPGU83 - Perkut. plastik på ekstra-anatomisk byp."
    },
    {
      "code" : "KPGU84",
      "display" : "Indsættelse af stent i ekstra-anatomisk byp.",
      "definition" : "KPGU84 - Indsættelse af stent i ekstra-anatomisk byp."
    },
    {
      "code" : "T000010",
      "display" : "hud",
      "definition" : "T000010 - hud"
    },
    {
      "code" : "T000094",
      "display" : "mamma",
      "definition" : "T000094 - mamma"
    },
    {
      "code" : "T000113",
      "display" : "knoglemarv",
      "definition" : "T000113 - konglemarv"
    },
    {
      "code" : "T000132",
      "display" : "milt",
      "definition" : "T000132 - milt"
    },
    {
      "code" : "T000134",
      "display" : "lymfeknude",
      "definition" : "T000134 - lymfeknude"
    },
    {
      "code" : "T000146",
      "display" : "lymfeknude på hals",
      "definition" : "T000146 - lymfeknude på hals"
    },
    {
      "code" : "T000148",
      "display" : "supraclaviculær lymfeknude",
      "definition" : "T000148 - supraclaviculær lymfeknude"
    },
    {
      "code" : "T000154",
      "display" : "infraclaviculær lymfeknude",
      "definition" : "T000154 - infraclaviculær lymfeknude"
    },
    {
      "code" : "T000165",
      "display" : "Lymfeknude i mediastinum",
      "definition" : "T000165 - Lymfeknude i mediastinum"
    },
    {
      "code" : "T000166",
      "display" : "Lymfeknude i abdomen",
      "definition" : "T000166 - Lymfeknude i abdomen"
    },
    {
      "code" : "T000174",
      "display" : "lymfeknude i aksil",
      "definition" : "T000174 - lymfeknude i aksil"
    },
    {
      "code" : "T000177",
      "display" : "lymfeknude i inguen",
      "definition" : "T000177 - lymfeknude i inguen"
    },
    {
      "code" : "T000224",
      "display" : "Knogle",
      "definition" : "T000224 - Knogle"
    },
    {
      "code" : "T000240",
      "display" : "os sacrum",
      "definition" : "T000240 - os sacrum"
    },
    {
      "code" : "T000241",
      "display" : "os coccygis",
      "definition" : "T000241 - os coccygis"
    },
    {
      "code" : "T000298",
      "display" : "skeletmuskulatur",
      "definition" : "T000298 - skeletmuskulatur"
    },
    {
      "code" : "T000347",
      "display" : "cavitas nasi",
      "definition" : "T000347 - cavitas nasi"
    },
    {
      "code" : "T000352",
      "display" : "Bihule",
      "definition" : "T000352 - Bihule"
    },
    {
      "code" : "T000398",
      "display" : "lunge",
      "definition" : "T000398 - lunge"
    },
    {
      "code" : "T000400",
      "display" : "lungehilum",
      "definition" : "T000400 - lungehilum"
    },
    {
      "code" : "T000438",
      "display" : "Hjerte",
      "definition" : "T000438 - Hjerte"
    },
    {
      "code" : "T000492",
      "display" : "blodkar",
      "definition" : "T000492 - blodkar"
    },
    {
      "code" : "T000522",
      "display" : "arteria carotis interna",
      "definition" : "T000522 - arteria carotis interna"
    },
    {
      "code" : "T000523",
      "display" : "arteria communicans posterior",
      "definition" : "T000523 - arteria communicans posterior"
    },
    {
      "code" : "T000526",
      "display" : "arteria communicans anterior",
      "definition" : "T000526 - arteria communicans anterior"
    },
    {
      "code" : "T000527",
      "display" : "arteria cerebri anterior",
      "definition" : "T000527 - arteria cerebri anterior"
    },
    {
      "code" : "T000528",
      "display" : "arteria cerebri media",
      "definition" : "T000528 - arteria cerebri media"
    },
    {
      "code" : "T000529",
      "display" : "arteria vertebralis",
      "definition" : "T000529 - arteria vertebralis"
    },
    {
      "code" : "T000530",
      "display" : "arteria basilaris",
      "definition" : "T000530 - arteria basilaris"
    },
    {
      "code" : "T000531",
      "display" : "arteria cerebelli",
      "definition" : "T000531 - arteria cerebelli"
    },
    {
      "code" : "T000569",
      "display" : "mund",
      "definition" : "T000569 - mund"
    },
    {
      "code" : "T000600",
      "display" : "Spytkirtler",
      "definition" : "T000600 - Spytkirtler"
    },
    {
      "code" : "T000607",
      "display" : "lever",
      "definition" : "T000607 - lever"
    },
    {
      "code" : "T000627",
      "display" : "galdeblære",
      "definition" : "T000627 - galdeblære"
    },
    {
      "code" : "T000638",
      "display" : "pancreas",
      "definition" : "T000638 - pancreas"
    },
    {
      "code" : "T000647",
      "display" : "Pharynx",
      "definition" : "T000647 - Pharynx"
    },
    {
      "code" : "T000654",
      "display" : "Ganetonsil",
      "definition" : "T000654 - Ganetonsil"
    },
    {
      "code" : "T000653",
      "display" : "Tonsil og adenoid",
      "definition" : "T000653 - Tonsil og adenoid"
    },
    {
      "code" : "T000657",
      "display" : "Ganetonsiller",
      "definition" : "T000657 - Ganetonsiller"
    },
    {
      "code" : "T000662",
      "display" : "øsofagus",
      "definition" : "T000662 - øsofagus"
    },
    {
      "code" : "T000670",
      "display" : "ventrikel",
      "definition" : "T000670 - ventrikel"
    },
    {
      "code" : "T000695",
      "display" : "tyndtarm",
      "definition" : "T000695 - tyndtarm"
    },
    {
      "code" : "T000702",
      "display" : "mesenterium",
      "definition" : "T000702 - mesenterium"
    },
    {
      "code" : "T000703",
      "display" : "duodenum",
      "definition" : "T000703 - duodenum"
    },
    {
      "code" : "T000706",
      "display" : "Tarm",
      "definition" : "T000706 - Tarm"
    },
    {
      "code" : "T000725",
      "display" : "colon",
      "definition" : "T000725 - colon"
    },
    {
      "code" : "T000773",
      "display" : "nyre",
      "definition" : "T000773 - nyre"
    },
    {
      "code" : "T000803",
      "display" : "ureter",
      "definition" : "T000803 - ureter"
    },
    {
      "code" : "T000812",
      "display" : "vesica urinaria",
      "definition" : "T000812 - vesica urinaria"
    },
    {
      "code" : "T000824",
      "display" : "urethra",
      "definition" : "T000824 - urethra"
    },
    {
      "code" : "T000834",
      "display" : "Prostata",
      "definition" : "T000834 - prostata"
    },
    {
      "code" : "T000840",
      "display" : "vesicula seminalis",
      "definition" : "T000840 - vesicula seminalis"
    },
    {
      "code" : "T000842",
      "display" : "testis",
      "definition" : "T000842 - testis"
    },
    {
      "code" : "T000854",
      "display" : "begge testes",
      "definition" : "T000854 - begge testes"
    },
    {
      "code" : "T000892",
      "display" : "vagina",
      "definition" : "T000892 - vagina"
    },
    {
      "code" : "T000898",
      "display" : "uterus",
      "definition" : "T000898 - uterus"
    },
    {
      "code" : "T000909",
      "display" : "Genitalia interna",
      "definition" : "T000909 - Genitalia interna"
    },
    {
      "code" : "T000948",
      "display" : "begge ovarier",
      "definition" : "T000948 - begge ovarier"
    },
    {
      "code" : "T001022",
      "display" : "glandula thyroidea",
      "definition" : "T001022 - glandula thyroidea"
    },
    {
      "code" : "T001039",
      "display" : "centralnervesystem",
      "definition" : "T001039 - centralnervesystem"
    },
    {
      "code" : "T001057",
      "display" : "arachnoidea",
      "definition" : "T001057 - arachnoidea"
    },
    {
      "code" : "T001127",
      "display" : "bulbus oculi",
      "definition" : "T001127 - bulbus oculi"
    },
    {
      "code" : "T001145",
      "display" : "glandula lacrimalis",
      "definition" : "T001145 - glandula lacrimalis"
    },
    {
      "code" : "T001182",
      "display" : "Orbita",
      "definition" : "T001182 - Orbita"
    },
    {
      "code" : "T001184",
      "display" : "Hals",
      "definition" : "T001184 - Hals"
    },
    {
      "code" : "T001210",
      "display" : "mediastinum",
      "definition" : "T001210 - mediastinum"
    },
    {
      "code" : "T001220",
      "display" : "bugvæg",
      "definition" : "T001220 - bugvæg"
    },
    {
      "code" : "T001222",
      "display" : "peritoneum",
      "definition" : "T001222 - peritoneum"
    },
    {
      "code" : "T001227",
      "display" : "retroperitoneum",
      "definition" : "T001227 - retroperitoneum"
    },
    {
      "code" : "T001231",
      "display" : "Pelvis",
      "definition" : "T001231 - Pelvis"
    },
    {
      "code" : "TUL1",
      "display" : "højresidig",
      "definition" : "TUL1 - højresidig"
    },
    {
      "code" : "TUL2",
      "display" : "venstresidig",
      "definition" : "TUL2 - venstresidig"
    },
    {
      "code" : "TUL3",
      "display" : "dobbeltsidig",
      "definition" : "TUL3 - dobbeltsidig"
    },
    {
      "code" : "TUL7",
      "display" : "side kan ikke angives",
      "definition" : "TUL7 - side kan ikke angives"
    },
    {
      "code" : "TUL9A",
      "display" : "lateral",
      "definition" : "TUL9A - lateral"
    },
    {
      "code" : "TUL9B",
      "display" : "medial",
      "definition" : "TUL9B - medial"
    },
    {
      "code" : "ZDA03A1",
      "display" : "Clavien grad 1",
      "definition" : "Clavien grad 1"
    },
    {
      "code" : "ZDA03A2",
      "display" : "Clavien grad 2",
      "definition" : "Clavien grad 2"
    },
    {
      "code" : "ZDA03A3",
      "display" : "Clavien grad 3",
      "definition" : "Clavien grad 3",
      "concept" : [
        {
          "code" : "ZDA03A3A",
          "display" : "Clavien grad 3a",
          "definition" : "Clavien grad 3a"
        },
        {
          "code" : "ZDA03A3B",
          "display" : "Clavien grad 3b",
          "definition" : "Clavien grad 3b"
        }
      ]
    },
    {
      "code" : "ZDA03A4",
      "display" : "Clavien grad 4",
      "definition" : "Clavien grad 4",
      "concept" : [
        {
          "code" : "ZDA03A4A",
          "display" : "Clavien grad 4a",
          "definition" : "Clavien grad 4a"
        },
        {
          "code" : "ZDA03A4B",
          "display" : "Clavien grad 4b",
          "definition" : "Clavien grad 4b"
        }
      ]
    },
    {
      "code" : "ZDA03A5",
      "display" : "Clavien grad 5",
      "definition" : "Clavien grad 5"
    },
    {
      "code" : "ZDI021",
      "display" : "asymptomatisk",
      "definition" : "ZDI021 - asymptomatisk"
    },
    {
      "code" : "ZDI022",
      "display" : "symptomatisk",
      "definition" : "ZDI022 - symptomatisk"
    }
  ]
}

```
